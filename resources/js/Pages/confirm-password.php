<?php

use function Laravel\Folio\name;

name('password.confirm')->middleware('auth');
