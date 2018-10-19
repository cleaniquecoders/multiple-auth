<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accountant extends Model
{
    protected $guarded = ['id'];

    protected $hidden = [
    	'accountant_password', 'remember_token',
    ];
}
