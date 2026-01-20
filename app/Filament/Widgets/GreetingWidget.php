<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class GreetingWidget extends Widget
{
    // Use INSTANCE property, NOT static
    protected string $view = 'filament.widgets.greeting-widget';

    protected int|string|array $columnSpan = 'full';
}
