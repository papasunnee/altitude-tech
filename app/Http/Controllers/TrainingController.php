<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\CourseRegistration ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TrainingController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function register(Request $request){
        $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|digits_between:11,13',
                'address' => 'required',
                'course' => 'required',
            ]);
            $course_registration = new CourseRegistration ;
            $course_registration->name = $request->input('name');
            $course_registration->email = strtolower($request->input('email'));
            $course_registration->phone = $request->input('phone');
            $course_registration->address = $request->input('address');
            $course_registration->course = $request->input('course');
            if($findEmail = CourseRegistration::where(['email' => $course_registration->email , 'course' => $course_registration->course])->first()){
                return back()->with('error', 'Sorry, it appears you have registered for this course already, we will get back to you. ') ;
            }
            // if($findPhone = CourseRegistration::where('phone', $request->input('phone'))->first()){
            //     return back()->with('error', 'Sorry, this phone number is already taken') ;
            // }
            $course_registration->save();

            Mail::to($request->email)->cc('altitudetechnologynig@gmail.com')->send(new ContactEmail($request));

            return back()->with('success', 'Your record has been successfully submitted') ;

    }
    
    public function getRegisteredCandidates(Request $request){
        
            $getRegisteredCandidates = CourseRegistration::all() ;
            
            return back()->with('success', 'Your record has been successfully submitted') ;

    }
}
