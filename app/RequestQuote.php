<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestQuote extends Model
{
    protected $fillable = [
        'name','job_title','email','phone','company','project_type','spec_upload','description','comment'
    ];
}
