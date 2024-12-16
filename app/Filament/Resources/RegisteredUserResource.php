<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegisteredUserResource\Pages;
use App\Filament\Resources\RegisteredUserResource\RelationManagers;
use App\Models\RegisteredUser;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegisteredUserResource extends Resource
{
    protected static ?string $model = RegisteredUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('nid'),
                Tables\Columns\TextColumn::make('vaccineCenter.name')
                    ->label('Vaccine Center')
                    ->sortable()
                    ->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListRegisteredUsers::route('/'),
            'create' => Pages\CreateRegisteredUser::route('/create'),
            'edit' => Pages\EditRegisteredUser::route('/{record}/edit'),
        ];
    }
}
