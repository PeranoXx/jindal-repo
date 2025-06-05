<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Settings extends Page
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'Settings';
    protected static ?int $navigationSort = 1;
    protected static string $view = 'filament.pages.settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = Setting::first() ?? new Setting();
        $this->form->fill($settings->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('site_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('site_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('address')
                    ->required()
                    ->maxLength(500),
                FileUpload::make('logo')
                    ->image()
                    ->directory('settings')
                    ->visibility('public'),
                FileUpload::make('favicon')
                    ->image()
                    ->directory('settings')
                    ->visibility('public'),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();
        
        $setting = Setting::first() ?? new Setting();
        $setting->fill($data);
        $setting->save();

        Notification::make()
            ->success()
            ->title('Settings saved successfully')
            ->send();
    }
}
