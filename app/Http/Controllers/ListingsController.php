<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller
{

    public function ___construct () 
    {

        $this->middleware('auth', ['except' =>['show', 'index' ]]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listings = Listing::orderBy('created_at', 'desc')->get();

        return view ('welcome')->with(['listings'=>$listings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view ('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
               'name'=>'required', 
        ]);

        //create lisitng
    
        $listing = new Listing;
        $listing->name = $request->input('name');
        $listing->website = $request->input('website');
        $listing->phone = $request->input('phone');
        $listing->address = $request->input('address');
        $listing->bio = $request->input('bio');
        $listing->user_id = auth()->user()->id;
        
        $listing->save();

        return redirect('/home')->with('success', "Listing added");


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
        $listings = Listing::find($id);

        return view ('listings.show')->with(['listings'=>$listings]);
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
        $listing = Listing::find($id);

        return view ('listings.edit')->with(['listing'=>$listing]);
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

        $this->validate($request,[
            'name'=>'required', 
     ]);

     //create lisitng
 
     $listing = Listing::findOrFail($id);
     $listing->name = $request->input('name');
     $listing->website = $request->input('website');
     $listing->phone = $request->input('phone');
     $listing->address = $request->input('address');
     $listing->bio = $request->input('bio');
     $listing->user_id = auth()->user()->id;
     
     $listing->save();

     return redirect('/home')->with('success', "Listing updated");

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
        $listing = Listing::findOrFail($id);

        $listing->delete();

        return redirect("home")->with(['success'=>"Listing deleted"]);



    }
}
