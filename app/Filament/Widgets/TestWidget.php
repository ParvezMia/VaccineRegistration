<?php

namespace App\Filament\Widgets;

use App\Models\RegisteredUser;
use App\Models\VaccineCenter;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TestWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //
            Stat::make('Number of Registered Users', RegisteredUser::count())
            ->color('success'),

            Stat::make('Number of Vaccine Center', VaccineCenter::count())
            ->color('info'),

        ];
    }
}
