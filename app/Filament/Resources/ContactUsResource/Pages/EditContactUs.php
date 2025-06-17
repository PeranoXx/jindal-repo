<?php

namespace App\Filament\Resources\ContactUsResource\Pages;

use App\Filament\Resources\ContactUsResource;
use App\Models\ContactUs;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactUs extends EditRecord
{
    protected static string $resource = ContactUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function mount($record): void
    {
        parent::mount($record);
        $contactUs = ContactUs::find($record);

        if (! $contactUs->seen) {
            $contactUs->seen = true;
            $contactUs->save();
        }
    }
} 