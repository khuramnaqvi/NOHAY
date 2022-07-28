<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class personController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::where('role',1)->paginate(10);

        return view('admin/person_index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'file'=>    'required',
            'email' =>  'required|email|unique:users',
            
        ]);

        $hash=Hash::make('12345678');

        $user= new User;
        
        
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$hash;
        $user->role=1; 
        $user->fburl=$request->fburl;
        $user->twurl=$request->twurl;
        if($request->hasFile('file')){
            $file=$request->file('file');
            $extension=$request->file->extension();
            $fileName=time()."_.".$extension;
            $request->file->move('upload/images/',$fileName);
            $user->file =$fileName;

        }
        $user->save();
        return back()->with('success', 'Noha Khawan Successfully Add');
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
        $user=User::find($id);

        return view('admin/person_edit',compact('user'));
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
        $user=Companies::find($id);
        
        
        $user->name=$request->name;
        $user->email=$request->email; 
        $user->fburl=$request->fburl;
        $user->twurl=$request->twurl;
        if($request->hasFile('file')){
            $file=$request->file('file');
            $extension=$request->file->extension();
            $fileName=time()."_.".$extension;
            $request->file->move('upload/images/',$fileName);
            $user->file =$fileName;

        }
        $user->save();
        return back()->with('success', 'Noha Khawan Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        
        
        $user->delete();
        return back()->with('success', 'Company Successfully Delete');
    }
}
