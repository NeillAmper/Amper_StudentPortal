<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // This allows the 'create' and 'update' routes to work
    protected $fillable = ['name', 'email', 'course', 'year'];
}