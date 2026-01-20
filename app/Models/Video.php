<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'youtube_url',
        'thumbnail',
    ];

    /**
     * Convert YouTube URL to embed URL
     * and generate thumbnail if not uploaded.
     */
    public function setYoutubeUrlAttribute($value): void
    {
        if (! $value) {
            return;
        }

        preg_match(
            '%(?:youtube\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',
            $value,
            $matches
        );

        if (isset($matches[1])) {
            $videoId = $matches[1];

            // Always save embed URL
            $this->attributes['youtube_url'] =
                'https://www.youtube.com/embed/'.$videoId;

            /**
             * Only auto-generate thumbnail
             * if user did NOT upload one
             */
            if (
                empty($this->attributes['thumbnail']) ||
                str_starts_with($this->attributes['thumbnail'], 'http')
            ) {
                $this->attributes['thumbnail'] =
                    'https://img.youtube.com/vi/'.$videoId.'/hqdefault.jpg';
            }
        } else {
            $this->attributes['youtube_url'] = $value;
        }
    }

    /**
     * ALWAYS return a usable thumbnail URL
     */
    public function getThumbnailUrlAttribute(): ?string
    {
        // If user uploaded a thumbnail
        if ($this->thumbnail) {
            return str_starts_with($this->thumbnail, 'http')
                ? $this->thumbnail
                : asset('storage/'.$this->thumbnail);
        }

        // Auto-generate YouTube thumbnail from youtube_url
        if ($this->youtube_url) {
            preg_match('/embed\/([^\?]+)/', $this->youtube_url, $matches);
            $videoId = $matches[1] ?? null;

            if ($videoId) {
                return "https://img.youtube.com/vi/{$videoId}/hqdefault.jpg";
            }
        }

        return null;
    }

    /**
     * Extract YouTube ID from embed URL
     */
    public function getYoutubeIdAttribute(): ?string
    {
        if (! $this->youtube_url) {
            return null;
        }

        preg_match('/embed\/([^\?]+)/', $this->youtube_url, $matches);

        return $matches[1] ?? null;
    }
}
