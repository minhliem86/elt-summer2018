<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public $table = 'testimonials';

    protected $guarded = ['id'];
}
