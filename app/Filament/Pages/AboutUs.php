<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class AboutUs extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static string $view = 'filament.pages.about-us';

    protected static ?string $navigationGroup = 'About Us';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'About Us';

    protected static ?string $title = 'About Us';

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }

    protected function getHeaderWidgets(): array
    {
        return [];
    }

    protected function getFooterWidgets(): array
    {
        return [];
    }
} 