<?php

namespace App\Filament\Resources\RegisteredUserResource\Pages;

use App\Filament\Resources\RegisteredUserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRegisteredUser extends CreateRecord
{
    protected static string $resource = RegisteredUserResource::class;
}
