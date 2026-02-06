<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Dashboard';
    protected static ?string $title = 'Dashboard Admin';

    protected static string $view = 'filament.pages.dashboard';

    // protected function getHeaderWidgets(): array
    // {
    //     return [
    //         \App\Filament\Widgets\VisitChart::class,
    //     ];
    // }
}
