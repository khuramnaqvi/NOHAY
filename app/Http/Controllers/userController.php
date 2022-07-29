<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\nohay;
use Vqhteam\Ytdownload\YTDownload;


class userController extends Controller
{
    
    public function welcome()
    {
        $user=User::where('role',1)->paginate(5);
        $top=nohay::where('year',2022)->get();

        return view('welcome',compact('user','top'));
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
    
    
}
