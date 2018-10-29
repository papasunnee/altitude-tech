<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RequestQuote
 * @package App\Models
 * @version August 26, 2018, 5:04 pm UTC
 *
 * @property string name
 * @property string job_title
 * @property string email
 * @property string phone
 * @property string company
 * @property string project_type
 * @property string spec_upload
 * @property string description
 * @property string comment
 */
class RequestQuote extends Model
{
    use SoftDeletes;

    public $table = 'request_quotes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'job_title',
        'email',
        'phone',
        'company',
        'project_type',
        'spec_upload',
        'description',
        'comment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'job_title' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'company' => 'string',
        'project_type' => 'string',
        'spec_upload' => 'string',
        'description' => 'string',
        'comment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
