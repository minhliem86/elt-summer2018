<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $table = 'events';

    protected $guarded = ['id'];
}
