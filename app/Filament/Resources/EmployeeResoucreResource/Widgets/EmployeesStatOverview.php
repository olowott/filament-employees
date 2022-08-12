<?php

namespace App\Filament\Resources\EmployeeResoucreResource\Widgets;

use App\Models\Country;
use App\Models\Employees;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class EmployeesStatOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $us = Country::where('country_code', 'USA')->withCount('employees')->first();
        $uk = Country::where('country_code', 'UK')->withCount('employees')->first();
        return [
            //
            Card::make('All Employees',  Employees::all()->count()),
            Card::make($uk->name . ' Employees', $uk ? $uk->employees_count : 0),
            Card::make($us->name . ' Employees', $us ? $us->employees_count : 0),
            Card::make('Average time on page', '3:12'),
        ];
    }
}
