<?php

namespace App\Http\Controllers;

use App\VRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Auth;

class VRequestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vrequests.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vrequest = new VRequest;

        $vrequest->user_id = Auth::user()->id;
        $vrequest->vacation_start = $request->vstart;
        $vrequest->vacation_end = $request->vend;
        $vrequest->message = $request->message;

        $vrequest->save();
        return view('vrequests.myrequests');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VRequest  $vRequest
     * @return \Illuminate\Http\Response
     */
    public function show(VRequest $vRequest)
    {   
        
        if(!Auth::user()->admin) return redirect('home')->withErrors('Authentication Failed!');

        $vrequest = VRequest::all();
        return view('vrequests.cpanel')->with('vrequest', $vrequest);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VRequest  $vRequest
     * @return \Illuminate\Http\Response
     */

    public function show2(VRequest $vRequest)
    {   
        if(!Auth::check()) return redirect('home');
        
        $myrequests = vRequest::all()->where('user_id', Auth::user()->id);
        
        return view('vrequests.myrequests')->with('myrequests', $myrequests);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VRequest  $vRequest
     * @return \Illuminate\Http\Response
    */
    public function show3($id)
    {
        $request = VRequest::find($id);
        if($request->user_id != Auth::user()->id)
            return redirect('home')->withErrors("Access denied!");

        return view('vrequests.view')->with('vr', $request);
    }

    public function edit($id)
    {
        $request = VRequest::find($id);
        if($request->user_id != Auth::user()->id)
            return redirect('home')->withErrors("Access denied!");
        Log::error('Showing request: ' . $request);

        return view('vrequests.edit')->with('vr', $request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VRequest  $vRequest
     * @return \Illuminate\Http\Response
     */

    public function update(Request $Request, VRequest $vRequest, $id)
    {
        $vRequest= VRequest::find($id);

        $vRequest->vacation_start = $Request->vstart;
        $vRequest->vacation_end = $Request->vend;
        $vRequest->message = $Request->message;

        $vRequest->save();

        return redirect()->route('myrequests');




         
    }

    public function update2(Request $request, VRequest $vRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VRequest  $vRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(VRequest $vRequest)
    {
        //
    }
}
