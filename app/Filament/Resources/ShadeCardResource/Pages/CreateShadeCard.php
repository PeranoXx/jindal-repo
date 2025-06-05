<?php

namespace App\Filament\Resources\ShadeCardResource\Pages;

use App\Filament\Resources\ShadeCardResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateShadeCard extends CreateRecord
{
    protected static string $resource = ShadeCardResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // redirects to index page
    }
}
