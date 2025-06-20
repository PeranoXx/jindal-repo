<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchivementResource\Pages;
use App\Filament\Resources\AchivementResource\RelationManagers;
use App\Models\Achivement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AchivementResource extends Resource
{
    protected static ?string $model = Achivement::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    protected static ?string $navigationGroup = 'Home'; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('achivement_number')
                    ->required()
                    ->numeric()
                    ->columnSpanFull(),
                Forms\Components\Select::make('status')
                    ->options([
                        true => 'Active',
                        false => 'Inactive',
                    ])
                    ->required()
                    ->native(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('achivement_number')->searchable(),
                Tables\Columns\TextColumn::make('status')->formatStateUsing(fn($state) => $state ? 'Active' : 'Inactive')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListAchivements::route('/'),
            'create' => Pages\CreateAchivement::route('/create'),
            'edit' => Pages\EditAchivement::route('/{record}/edit'),
        ];
    }
}
