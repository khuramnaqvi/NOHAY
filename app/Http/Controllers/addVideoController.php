<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\nohay;

class addVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=user::where('role',1)->get();
        $emp=nohay::all();

        return view('admin/video_index',compact('user','emp'));
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
        $user= new nohay;
        
        
        $user->url=$request->url;
        $user->user_id=$request->user_id;
        $user->tittle=$request->tittle;
        $user->year=$request->year;

        $user->save();
        return back()->with('success', 'Noha Successfully Add');
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
        $user= nohay::find($id);
        $user->url=$request->url;
        $user->tittle=$request->tittle;
        $user->year=$request->year;
        $user->save();


        return back()->with('success', 'Noha Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=nohay::find($id);
        
        
        $user->delete();
        return back()->with('success', 'Company Successfully Delete');
    }
}
