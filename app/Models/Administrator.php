<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $guarded = ['id'];

    protected $hidden = [
    	'administrator_password', 'remember_token',
    ];
}
