<?php

use function Laravel\Folio\name;
use function Laravel\Folio\render;

render(function ($view) {
  return $view->with([
    'email' => request()->email,
    'token' => request()->route('token'),
  ]);
});

name('password.reset')->middleware('guest');
