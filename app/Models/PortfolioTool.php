<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioTool extends Model
{
    use HasFactory;

    protected $fillable = [
        'portfolio_category_id', // now belongs to category
        'tool_name',
    ];

    // Belongs directly to category
    public function portfolioCategory()
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }
}
