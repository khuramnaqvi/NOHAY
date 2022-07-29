<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\nohay;
use App\Models\Silder_noha;
use App\Models\liveStream;

 
use File;

 
use Vqhteam\Ytdownload\YTDownload;


class userController extends Controller
{
    
    public function welcome()
    {
        $user=User::where('role',1)->paginate(5);
        $top=nohay::where('year',2022)->get();
        $video=Silder_noha::find(1);

        return view('welcome',compact('user','top','video'));
    }
    public function All_Noha_Khawan()
    {
        $user=User::where('role',1)->paginate(10);
        $list=nohay::get()->groupBy('year');

        return view('All_Noha_Khawan',compact('user','list'));
    }
    public function list_nohay($id = null)
    {
        if($id==null){
            $list=nohay::get()->groupBy('year');

        }
        else{
            $list=nohay::where('user_id',$id)->get()->groupBy('year');
        }
        //dd($list);
        return view('list_nohay',compact('list'));
    }
    public function single($id)
    {
        $list=nohay::find($id);
        if (nohay::where('id','!=',$id)->where('user_id',  $list->user_id)->where('year',  $list->year)->exists()) {
            $three=nohay::where('id','!=',$id)->where('user_id',  $list->user_id)->where('year',  $list->year)->take(3)->get();
            
   
        }
        else{
            $three=nohay::where('id','!=',$id)->inRandomOrder()->take(3)->get();
        }


        $get = YTDownload::getLink($list->url);
        $link;
        foreach ($get["links"] as  $value) {

            if($value["quality"] =="480p")
            {
                $link=$value["link"];
            }

        }
        
        return view('single',compact('list','link','three'));
    }
    public function live_stream()
    {
         $user=liveStream::all();
        return view('live_stream',compact('user'));
        //return view('admin/slider_nohay' ,compact('list'));
    }
    public function slider_nohay()
    {
         $user=User::where('role',1)->get();

        return view('admin/slider_nohay',compact('user'));
        //return view('admin/slider_nohay' ,compact('list'));
    }
    public function slider_save(Request $request)
    {
       

        $user=Silder_noha::find(1);
        
        
      
        if($request->hasFile('file')){
            $file=$request->file('file');
            $extension=$request->file->extension();
            $fileName="SLIDER_.".$extension;
            if (File::exists(public_path('upload/images/',$fileName)))
            {
                File::delete(public_path('upload/images/',$fileName));
            }
            $request->file->move('upload/images/',$fileName);
            $user->url =$fileName;

        }
        $user->update();
        return back()->with('success', 'Noha  Successfully Add');
    }
    
    public function live()
    {
         $user=liveStream::all();
        return view('admin/live',compact('user'));
        //return view('admin/slider_nohay' ,compact('list'));
    }
    public function live_save(Request $request)
    {
        $get=explode("youtu.be/",$request->url);
        $url=$get['1'];
        $user=new liveStream();
        $user->name=$request->name;
        $user->url =$url;
        $user->save();

        return back()->with('success', 'Save  Successfully Add');
    }
    public function live_delete($id)
    {
        
        $user=liveStream::find($id);
        $user->delete();

        return back()->with('success', 'Delete  Successfully Add');
    }

    
    
    
    
}
