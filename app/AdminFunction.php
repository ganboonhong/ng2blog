<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminFunction extends Model
{
    protected $table = 'admin_functions';

    protected $fillable = ['name'];

}
