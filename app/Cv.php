<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $fillable = ['name', 'fileName', 'email', 'text'];
}
