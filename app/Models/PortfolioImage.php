<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'portfolio_category_id', // now belongs to category
        'image_url',             // stores an array of images
        'caption',
    ];

    protected $casts = [
        'image_url' => 'array',
    ];

    // Belongs directly to category
    public function portfolioCategory()
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }
}
