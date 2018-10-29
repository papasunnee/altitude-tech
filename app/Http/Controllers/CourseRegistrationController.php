<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRegistrationRequest;
use App\Http\Requests\UpdateCourseRegistrationRequest;
use App\Repositories\CourseRegistrationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CourseRegistrationController extends AppBaseController
{
    /** @var  CourseRegistrationRepository */
    private $courseRegistrationRepository;

    public function __construct(CourseRegistrationRepository $courseRegistrationRepo)
    {
        $this->middleware('auth');
        $this->courseRegistrationRepository = $courseRegistrationRepo;
    }

    /**
     * Display a listing of the CourseRegistration.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->courseRegistrationRepository->pushCriteria(new RequestCriteria($request));
        $courseRegistrations = $this->courseRegistrationRepository->all();

        return view('course_registrations.index')
            ->with('courseRegistrations', $courseRegistrations);
    }

    /**
     * Show the form for creating a new CourseRegistration.
     *
     * @return Response
     */
    public function create()
    {
        return view('course_registrations.create');
    }

    /**
     * Store a newly created CourseRegistration in storage.
     *
     * @param CreateCourseRegistrationRequest $request
     *
     * @return Response
     */
    public function store(CreateCourseRegistrationRequest $request)
    {
        $input = $request->all();
        if($input["name"] == null) $input["name"]  = "No Name" ;
        if($input["email"] == null) $input["email"]  = "No Email" ;
        if($input["phone"] == null) $input["phone"]  = "No Phone" ;
        if($input["address"] == null) $input["address"]  = "No Address" ;
        if($input["course"] == null) $input["course"]  = "No Course" ;

        $courseRegistration = $this->courseRegistrationRepository->create($input);

        Flash::success('Course Registration saved successfully.');

        return redirect(route('courseRegistrations.index'));
    }

    /**
     * Display the specified CourseRegistration.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courseRegistration = $this->courseRegistrationRepository->findWithoutFail($id);

        if (empty($courseRegistration)) {
            Flash::error('Course Registration not found');

            return redirect(route('courseRegistrations.index'));
        }

        return view('course_registrations.show')->with('courseRegistration', $courseRegistration);
    }

    /**
     * Show the form for editing the specified CourseRegistration.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courseRegistration = $this->courseRegistrationRepository->findWithoutFail($id);

        if (empty($courseRegistration)) {
            Flash::error('Course Registration not found');

            return redirect(route('courseRegistrations.index'));
        }

        return view('course_registrations.edit')->with('courseRegistration', $courseRegistration);
    }

    /**
     * Update the specified CourseRegistration in storage.
     *
     * @param  int              $id
     * @param UpdateCourseRegistrationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourseRegistrationRequest $request)
    {
        $courseRegistration = $this->courseRegistrationRepository->findWithoutFail($id);

        if (empty($courseRegistration)) {
            Flash::error('Course Registration not found');

            return redirect(route('courseRegistrations.index'));
        }

        $courseRegistration = $this->courseRegistrationRepository->update($request->all(), $id);

        Flash::success('Course Registration updated successfully.');

        return redirect(route('courseRegistrations.index'));
    }

    /**
     * Remove the specified CourseRegistration from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courseRegistration = $this->courseRegistrationRepository->findWithoutFail($id);

        if (empty($courseRegistration)) {
            Flash::error('Course Registration not found');

            return redirect(route('courseRegistrations.index'));
        }

        $this->courseRegistrationRepository->delete($id);

        Flash::success('Course Registration deleted successfully.');

        return redirect(route('courseRegistrations.index'));
    }
}
