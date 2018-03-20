<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public $table = 'programs';

    protected $guarded = ['id'];

    public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
}
