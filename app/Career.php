<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'job_title','company_name','location','work_condition',
    ];
}
