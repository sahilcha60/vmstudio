<?php

namespace App\Filament\Widgets;

use App\Models\PortfolioCategory;
use App\Models\PortfolioItem;
use App\Models\Spotlight;
use App\Models\Testimonial;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Portfolio Categories', PortfolioCategory::count())
                ->icon('heroicon-o-folder'),

            Stat::make('Portfolio Items', PortfolioItem::count())
                ->icon('heroicon-o-photo'),

            Stat::make('Spotlight', Spotlight::count())
                ->icon('heroicon-o-briefcase'),

            Stat::make('Testimonials', Testimonial::count())
                ->icon('heroicon-o-chat-bubble-left-right'),
        ];
    }
}
