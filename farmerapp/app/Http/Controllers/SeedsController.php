<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seed;
use Auth;
use App\User;

class SeedsController extends Controller
{
    //search
    public function search(Request $request){
        $search = $request->get('search'); 
        $seed = Seed::where('seedname','LIKE','%'.$search.'%')->get();
        //return dd($seed);
        return view('pages.searchseed')->with('seeds',$seed);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
       // $seed = USeed::all();
       $id = Auth::user()->id;
       $seed = User::findorfail($id)->seed;
    return view('pages.seeds')->with('seeds', $seed);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "seeds controller create method";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'seedname' => 'required|String'
        ]);
           $seed = new Seed();
           $seed->user_id= Auth::user()->id;
           $seed->seedname = $request->get('seedname');
           $seed->save();

           return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    // $seed = Seed::findorfail($id);
    // return view('pages.viewseed')->with('seeds', $seed);
    $instruction = Seed::findorfail($id)->getinstruction;
    $seedname = Seed::findorfail($id);
    
      return view('pages.seedview',compact('seedname',$seedname))->with('instructions',$instruction);

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
