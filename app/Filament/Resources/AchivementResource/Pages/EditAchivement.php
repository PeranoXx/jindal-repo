<?php

namespace App\Filament\Resources\AchivementResource\Pages;

use App\Filament\Resources\AchivementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAchivement extends EditRecord
{
    protected static string $resource = AchivementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // redirects to index page
    }
}
