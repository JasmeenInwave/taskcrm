<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Api\Controllers\AddressesController;
use App\Http\Api\Controllers\BanksController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\BudgetsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\IssuesController;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Api\Controllers\TasksController;
use App\Http\Controllers\FollowupsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UsersController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('task', TasksController::class);
Route::put('task/{task}/restore', [TasksController::class, 'restore']);

Route::resource('bank', AddressesController::class);
Route::put('bank/{bank}/restore', [AddressesController::class, 'restore']);

Route::resource('address', AddressesController::class);
Route::put('address/{address}/restore', [AddressesController::class, 'restore']);
