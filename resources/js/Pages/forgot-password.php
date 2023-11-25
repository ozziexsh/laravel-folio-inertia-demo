<?php

use function Laravel\Folio\name;
use function Laravel\Folio\render;

render(function($view) {
  return $view->with([
    'status' => session('status'),
  ]);
});

name('password.request')->middleware('guest');
