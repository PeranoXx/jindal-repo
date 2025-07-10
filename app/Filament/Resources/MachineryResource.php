<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MachineryResource\Pages;
use App\Filament\Resources\MachineryResource\RelationManagers;
use App\Models\Machinery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MachineryResource extends Resource
{
    protected static ?string $model = Machinery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Home'; // 

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }

    public static function getNavigationLabel(): string
    {
        return 'Machinery';
    }

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-wrench-screwdriver';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required()->disk('public')
                    ->directory('machinery')->visibility('public')->columnSpanFull()->imageEditor()->imageEditorAspectRatios([
                        '4:3', // or custom ratio
                    ])->imageEditorViewportWidth(300) // Optional: preview size
                    ->imageEditorViewportHeight(300)
                    ->imageEditorMode(1)->imageResizeMode('cover')
                    ->imageCropAspectRatio('4:3')->optimize('webp'), // Forces cropping mode// Lock the aspect ratio
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\Select::make('status')
                ->options([
                    true => 'Active',
                    false => 'Inactive',
                ])->required() ->native(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ToggleColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMachineries::route('/'),
            'create' => Pages\CreateMachinery::route('/create'),
            'edit' => Pages\EditMachinery::route('/{record}/edit'),
        ];
    }
}
