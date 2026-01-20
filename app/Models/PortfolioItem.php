<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'date', 'category', 'description', 'testimonial', 'client_name', 'is_featured', 'sort_order', 'portfolio_category_id'];

    public function portfolioCategory()
    {
        return $this->belongsTo(
            PortfolioCategory::class,
            'portfolio_category_id'
        );
    }

    // IMAGES
    public function images()
    {
        return $this->hasMany(PortfolioImage::class, 'portfolio_item_id');
    }

    // TOOLS
    public function tools()
    {
        return $this->hasMany(PortfolioTool::class, 'portfolio_item_id');
    }
}
