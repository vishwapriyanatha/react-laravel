<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/get/organization', 'OrganizationController@getOrganizations')->name('get.organizations');
Route::get('/get/member', 'MemberController@getMembers')->name('get.members');
Route::get('/get/ticket', 'TicketController@getTicket')->name('get.tickets');

Route::view('/{path?}', 'home')->where('path', '.*')
    ->name('react');
