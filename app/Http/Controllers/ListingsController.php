<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::orderBy('created_at','desc')->get();
        return view('listings')->with('listings',$listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createListing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email'=> 'required',

        ]);
        $listings = new Listing();
        $listings->user_id  = auth()->user()->id;
        $listings->name     = $request->input('name');
        $listings->address  = $request->input('address');
        $listings->email    = $request->input('email');
        $listings->website  = $request->input('website');
        $listings->phone    = $request->input('phone');
        $listings->bio      = $request->input('bio');

        // save and redirect
        $listings->save();
        return redirect('/dashboard')->with('success', 'List Has been Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::find($id);
        return view('showListing')->with('listing', $listing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('editListing')->with('listing', $listing);
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
        $this->validate($request,[
            'name' => 'required',
            'email'=> 'required',

        ]);
        $listings = Listing::find($id);
        $listings->user_id  = auth()->user()->id;
        $listings->name     = $request->input('name');
        $listings->address  = $request->input('address');
        $listings->email    = $request->input('email');
        $listings->website  = $request->input('website');
        $listings->phone    = $request->input('phone');
        $listings->bio      = $request->input('bio');

        // update and redirect
        $listings->save();
        return redirect('/dashboard')->with('success', 'Listing Has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing->delete();
        return redirect('/dashboard')->with('success', 'Listing Has been Deleted');
    }


}
