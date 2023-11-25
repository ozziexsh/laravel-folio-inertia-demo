<?php

use Illuminate\Foundation\Application;

use function Laravel\Folio\render;

render(function ($view) {
  return $view->with([
    'canLogin' => true,
    'canRegister' => true,
    'laravelVersion' => Application::VERSION,
    'phpVersion' => PHP_VERSION,
  ]);
});
