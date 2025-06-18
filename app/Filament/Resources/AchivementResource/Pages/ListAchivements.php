<?php

namespace App\Filament\Resources\AchivementResource\Pages;

use App\Filament\Resources\AchivementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAchivements extends ListRecords
{
    protected static string $resource = AchivementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
