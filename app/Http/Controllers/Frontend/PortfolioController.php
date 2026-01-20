<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
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
    public function single(Request $request, $slug)
    {
        // Fetch category with tools only
        $category = PortfolioCategory::with([
            'tools' => function ($query) {
                $query->orderBy('id', 'asc');
            }
        ])
            ->where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        $portfolioTool = $category->tools->first(); // For SEO
        $categories = PortfolioCategory::where('status', 1)->get();

        // Set SEO meta
        if ($portfolioTool) {
            SEOMeta::setTitle($portfolioTool->meta_title);
            SEOMeta::setDescription($portfolioTool->meta_description);
        }

        // Flatten all images into a single collection
        $allImages = collect();
        foreach ($category->images as $image) {
            if (!empty($image->image_url) && is_array($image->image_url)) {
                foreach ($image->image_url as $img) {
                    $allImages->push([
                        'image' => $img,
                        'caption' => $image->caption ?? null
                    ]);
                }
            }
        }

        // Manual pagination
        $page = $request->get('page', 1);
        $perPage = 4;
        $images = new LengthAwarePaginator(
            $allImages->forPage($page, $perPage),
            $allImages->count(),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('frontend.portfolio.single', compact(
            'category',
            'portfolioTool',
            'categories',
            'images'
        ));
    }
}
