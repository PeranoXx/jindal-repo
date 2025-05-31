<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfrastructureResource\Pages;
use App\Filament\Resources\InfrastructureResource\RelationManagers;
use App\Models\Infrastructure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InfrastructureResource extends Resource
{
    protected static ?string $model = Infrastructure::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Home'; // 

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }

    public static function getNavigationLabel(): string
    {
        return 'Infrastructure';
    }

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-building-office-2';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required()->disk('public')
                    ->directory('carousels')->visibility('public')->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('title')
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
            'index' => Pages\ListInfrastructures::route('/'),
            'create' => Pages\CreateInfrastructure::route('/create'),
            'edit' => Pages\EditInfrastructure::route('/{record}/edit'),
        ];
    }
}
