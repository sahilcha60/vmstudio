<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use SEOMeta;

class PortfolioController extends Controller
{
    // List all portfolio categories
    public function index()
    {
        $categories = PortfolioCategory::with('images') // eager load images
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->paginate(4);

        return view('frontend.portfolio.index', compact('categories'));
    }

    // Show details of a single image/tool within a category
    public function single($slug)
    {
        // Fetch the category with first tool and all images
        $category = PortfolioCategory::with([
            'tools' => function ($query) {
                $query->orderBy('id', 'asc')->limit(1);
            },
            'images',
        ])
            ->where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        // First tool for SEO
        $portfolioTool = $category->tools->first(); // can be null

        // First image for Blade gallery
        $portfolioImage = $category->images->first(); // can be null

        // Fetch all active categories for header
        $categories = PortfolioCategory::where('status', 1)->get();

        // Set SEO meta
        if ($portfolioTool) {
            SEOMeta::setTitle($portfolioTool->meta_title);
            SEOMeta::setDescription($portfolioTool->meta_description);
        }

        // Pass all variables to view
        return view('frontend.portfolio.single', compact(
            'category',
            'portfolioTool',
            'portfolioImage',
            'categories' // add this
        ));
    }
}
