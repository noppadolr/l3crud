<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\ViewCustomer;

Route::get('/', function () {
    return view('welcome');
});

Route::get('customers/create',CreateCustomer::class);
Route::get('customers',Customers::class);



Route::get('customer/view/{id}',ViewCustomer::class);
