<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CourseRegistration
 * @package App\Models
 * @version August 26, 2018, 4:57 pm UTC
 *
 * @property string name
 * @property string email
 * @property string phone
 * @property string address
 * @property string course
 */
class CourseRegistration extends Model
{
    use SoftDeletes;

    public $table = 'course_registrations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'course'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'course' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
