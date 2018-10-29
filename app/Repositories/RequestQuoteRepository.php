<?php

namespace App\Repositories;

use App\Models\RequestQuote;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RequestQuoteRepository
 * @package App\Repositories
 * @version August 26, 2018, 5:04 pm UTC
 *
 * @method RequestQuote findWithoutFail($id, $columns = ['*'])
 * @method RequestQuote find($id, $columns = ['*'])
 * @method RequestQuote first($columns = ['*'])
*/
class RequestQuoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return RequestQuote::class;
    }
}
