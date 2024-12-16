<?php

namespace App\Filament\Resources\VaccineCenterResource\Pages;

use App\Filament\Resources\VaccineCenterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVaccineCenter extends EditRecord
{
    protected static string $resource = VaccineCenterResource::class;

    protected function getRedirectUrl(): string 
    { 
        return $this->getResource()::getUrl('index'); 
    } 
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}