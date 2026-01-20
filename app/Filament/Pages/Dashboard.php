<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\GreetingWidget;
use App\Filament\Widgets\StatsOverview;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public function getHeaderWidgets(): array
    {
        return [
            GreetingWidget::class,
        ];
    }

    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }
}
