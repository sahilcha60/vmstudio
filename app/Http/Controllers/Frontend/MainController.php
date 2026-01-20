<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\FeaturedPhoto;
use App\Models\PortfolioCategory;
use App\Models\Spotlight;
use App\Models\Testimonial;
use App\Models\Video;
use SEOMeta;

class MainController extends Controller
{
    public function homepage()
    {
        SEOMeta::setTitle('Branding and Marketing | Homepage');

        // Get active categories with images and tools
        $categories = PortfolioCategory::with([
            'images' => function ($query) {
                $query->orderBy('id', 'asc'); // order images by ID
            },
            'tools',
        ])->where('status', 1)->get();

        $testimonials = Testimonial::where('status', true)->get();
        $banners = Banner::all();
        $featuredPhotos = FeaturedPhoto::orderBy('id', 'asc')->get();
        $spotlights = Spotlight::limit(4)->get();

        return view('frontend.homepage', compact(
            'categories',
            'testimonials',
            'banners',
            'featuredPhotos',
            'spotlights'
        ));
    }

    public function about()
    {
        SEOMeta::setTitle('360 Marketing Ideas | About Us');

        $categories = PortfolioCategory::with('images')
            ->where('status', 1)
            ->orderBy('sort_order', 'asc')
            ->get();

        $testimonials = Testimonial::where('status', true)->get();

        $featuredPhotos = FeaturedPhoto::orderBy('id', 'asc')->get();

        return view('frontend.about', compact('categories', 'testimonials', 'featuredPhotos'));
    }

    public function spotlight()
    {
        $categories = PortfolioCategory::with('images')
            ->where('status', 1)
            ->orderBy('sort_order', 'asc')
            ->get();

        $testimonials = Testimonial::where('status', true)->get();

        // ✅ FIXED: no status column used here
        $spotlights = Spotlight::orderBy('id', 'asc')
            ->get()
            ->shuffle();

        // Unique names for filter buttons
        $spotlightNames = $spotlights->pluck('name')->unique();

        $featuredPhotos = FeaturedPhoto::orderBy('id', 'asc')->get();

        return view('frontend.spotlight', compact(
            'categories',
            'testimonials',
            'spotlights',
            'spotlightNames',
            'featuredPhotos'
        ));
    }

    public function video()
    {
        $categories = PortfolioCategory::with('images')
            ->where('status', 1)
            ->orderBy('sort_order', 'asc')
            ->get();

        $testimonials = Testimonial::where('status', true)->get();

        $videos = Video::orderBy('id', 'asc')
            ->get()
            ->shuffle();

        $featuredPhotos = FeaturedPhoto::orderBy('id', 'asc')->get();

        return view('frontend.video', compact('categories', 'testimonials', 'videos', 'featuredPhotos'));
    }

    public function contact()
    {
        SEOMeta::setTitle('360 Marketing Ideas | Contact Us');

        $categories = PortfolioCategory::where('status', 1)->get();

        $featuredPhotos = FeaturedPhoto::orderBy('id', 'asc')->get();

        return view('frontend.contact', compact('categories', 'featuredPhotos'));
    }
}
