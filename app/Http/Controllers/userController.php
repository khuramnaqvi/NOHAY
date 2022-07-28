<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\nohay;
use Vqhteam\Ytdownload\YTDownload;


class userController extends Controller
{
    public function All_Noha_Khawan()
    {
        $user=User::where('role',1)->paginate(10);

        return view('All_Noha_Khawan',compact('user'));
    }
    public function list_nohay($id = null)
    {
        if($id==null){
            $list=nohay::get();

        }
        else{
            $list=nohay::where('user_id',$id)->get();
        }
        
        return view('list_nohay',compact('list'));
    }
    public function single($id)
    {
        $list=nohay::find($id);


        $get = YTDownload::getLink($list->url);
        $link;
        foreach ($get["links"] as  $value) {

            if($value["quality"] =="720p")
            {
                $link=$value["link"];
            }

        }
        
        return view('single',compact('list','link'));
    }
    
    
}
