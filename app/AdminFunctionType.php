<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminFunctionType extends Model
{
    protected $table = 'admin_function_types';

    protected $fillable = ['name'];
}
