<?php

namespace App\Http\Controllers;

use App\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public $career ;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::paginate(10) ;
        return view('careers.index', compact('careers')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $career = Career::all() ;
        return view('careers.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'job_title' => 'required',
            'company_name' => 'required',
            'contact_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits_between:11,13',
            'work_condition' => 'required',
            'salary_range' => 'required',
            'country' => 'required',
            'state' => 'required',
        ]);

        $new_career = new Career ;
        $new_career->job_title = $request->job_title;
        $new_career->company_name = ucfirst($request->company_name);
        $new_career->contact_name = ucfirst($request->contact_name);
        $new_career->email = strtolower($request->email);
        $new_career->state = $request->state;
        $new_career->salary_range = $request->salary_range;
        $new_career->country = $request->country;
        $new_career->phone = $request->phone;
        $new_career->work_condition = $request->work_condition;

        $new_career->save();
        

        //Mail::to($request->email)->cc('altitudetechnologynig@gmail.com')->send(new QuoteEmail($request));

        return redirect()->back()->with('success', 'Job has been successfully uploaded') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        //
    }
}
