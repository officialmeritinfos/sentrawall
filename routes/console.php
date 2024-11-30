<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Schedule::command('queue:retry all')->everyMinute();
Schedule::command('queue:work --stop-when-empty')->everyMinute();
