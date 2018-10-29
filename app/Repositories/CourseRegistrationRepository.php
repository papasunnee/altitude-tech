<?php

namespace App\Repositories;

use App\Models\CourseRegistration;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CourseRegistrationRepository
 * @package App\Repositories
 * @version August 26, 2018, 4:57 pm UTC
 *
 * @method CourseRegistration findWithoutFail($id, $columns = ['*'])
 * @method CourseRegistration find($id, $columns = ['*'])
 * @method CourseRegistration first($columns = ['*'])
*/
class CourseRegistrationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'phone',
        'address',
        'course'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CourseRegistration::class;
    }
}
