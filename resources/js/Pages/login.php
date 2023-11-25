<?php

use Illuminate\Support\Facades\Route;

use function Laravel\Folio\name;
use function Laravel\Folio\render;

render(function($view) {
  return $view->with([
    'canResetPassword' => Route::has('password.request'),
    'status' => session('status'),
  ]);
});

name('login')->middleware('guest');
