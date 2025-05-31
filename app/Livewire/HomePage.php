<?php

namespace App\Livewire;

use App\Models\Home;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Filament\Notifications\Notification;

class HomePage extends Component implements HasForms
{
    use InteractsWithForms;

    public $description;

    public function mount(): void
    {
        $home = Home::find(1);

        if ($home) {
            $this->description = $home->description;
        } else {
            $this->description = ''; // or default value
        }

        $this->form->fill(['description' => $this->description]);
    }
    
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('description')->required(),
            ]);
    }
    
    public function save(): void
    {
        try {
            Home::updateOrCreate(
                ['id' => 1], // condition to find the record
                ['description' => $this->description],
            );
            Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
        } catch (\Exception $e) {
            Notification::make()
            ->title($e->getMessage())
            ->icon('heroicon-o-x-circle')
            ->iconColor('danger')
            ->success()
            ->send();
        }
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
