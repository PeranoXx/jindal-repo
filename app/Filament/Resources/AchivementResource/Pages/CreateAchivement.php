<?php

namespace App\Filament\Resources\AchivementResource\Pages;

use App\Filament\Resources\AchivementResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAchivement extends CreateRecord
{
    protected static string $resource = AchivementResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // redirects to index page
    }
}
