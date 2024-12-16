<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VaccineCenterResource\Pages;
use App\Filament\Resources\VaccineCenterResource\RelationManagers;
use App\Models\VaccineCenter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VaccineCenterResource extends Resource
{
    protected static ?string $model = VaccineCenter::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('daily_limit'),
                Forms\Components\TextInput::make(name: 'original_limit'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name'), 

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
            'index' => Pages\ListVaccineCenters::route('/'),
            'create' => Pages\CreateVaccineCenter::route('/create'),
            'edit' => Pages\EditVaccineCenter::route('/{record}/edit'),
        ];
    }
}
