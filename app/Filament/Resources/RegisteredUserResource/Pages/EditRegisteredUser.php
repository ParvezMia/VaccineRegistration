<?php

namespace App\Filament\Resources\RegisteredUserResource\Pages;

use App\Filament\Resources\RegisteredUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegisteredUser extends EditRecord
{
    protected static string $resource = RegisteredUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
