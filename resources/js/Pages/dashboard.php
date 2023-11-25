<?php

use function Laravel\Folio\middleware;

middleware(['auth', 'verified'])->name('dashboard');
