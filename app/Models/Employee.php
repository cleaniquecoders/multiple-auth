<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = ['id'];

    protected $hidden = [
    	'employee_password', 'remember_token',
    ];
}
