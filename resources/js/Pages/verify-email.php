<?php

use App\Providers\RouteServiceProvider;

use function Laravel\Folio\name;
use function Laravel\Folio\render;

render(function($view) {
  if (request()->user()->hasVerifiedEmail()) {
    return redirect()->intended(RouteServiceProvider::HOME);
  }
  return $view->with([
    'status' => session('status')
  ]);
});

name('verification.notice')->middleware('auth');
