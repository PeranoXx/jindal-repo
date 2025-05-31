<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Home extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.home';

    protected static ?string $navigationGroup = 'Home'; // 

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }

    public static function getNavigationLabel(): string
    {
        return 'Home Page';
    }

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-home';
    }
}
