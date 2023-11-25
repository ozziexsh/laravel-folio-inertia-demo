<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use function Laravel\Folio\props;
use function Laravel\Folio\render;

render(function ($view) {
  return $view->with([
    'canLogin' => true,
    'canRegister' => true,
    'laravelVersion' => Application::VERSION,
    'phpVersion' => PHP_VERSION,
  ]);
});
