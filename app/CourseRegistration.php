<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','phone' ,'email', 'address', 'course'
    ];
}
