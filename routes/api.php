<?php

use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\EmployeeResource;
use App\Filament\Resources\EmployeesResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/employees', function () {
    $employees = Employees::orderBy('last_name')->get();

    return EmployeeResource::collection($employees);
});
