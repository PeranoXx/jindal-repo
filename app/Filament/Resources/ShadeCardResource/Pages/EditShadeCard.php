<?php

namespace App\Filament\Resources\ShadeCardResource\Pages;

use App\Filament\Resources\ShadeCardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShadeCard extends EditRecord
{
    protected static string $resource = ShadeCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
