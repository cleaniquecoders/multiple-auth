<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('reload:db', function () {
	$this->call('migrate:fresh', ['--seed' => true]);
	$this->call('db:seed', ['--class' => 'AdministratorSeeder']);
	$this->call('db:seed', ['--class' => 'EmployeeSeeder']);
	$this->call('db:seed', ['--class' => 'AccountantSeeder']);
});
