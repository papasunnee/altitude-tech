<?php

namespace App\Http\Controllers;

use App\RequestQuote;
use App\Mail\QuoteEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('request-for-quote') ;
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
            'name' => 'required',
            'job_title' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits_between:11,13',
            'company' => 'required',
            'project_type' => 'required',
        ]);

        $request_quote = new RequestQuote ;
        $request_quote->name = $request->name;
        $request_quote->job_title = $request->job_title;
        $request_quote->email = $request->email;
        $request_quote->phone = $request->phone;
        $request_quote->company = $request->company;
        $request_quote->project_type = $request->project_type;
        $request_quote->spec_upload = $request->spec_upload;
        $request_quote->description = $request->description;
        $request_quote->comment = $request->comment;

        $request_quote->save();
        

        Mail::to($request->email)->cc('altitudetechnologynig@gmail.com')->send(new QuoteEmail($request));

        return redirect()->back()->with('success', 'Your Quote has been successfully submitted') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
