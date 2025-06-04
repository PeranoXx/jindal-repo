<?php

namespace App\Filament\Resources\ShadeCardResource\Pages;

use App\Filament\Resources\ShadeCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShadeCards extends ListRecords
{
    protected static string $resource = ShadeCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
