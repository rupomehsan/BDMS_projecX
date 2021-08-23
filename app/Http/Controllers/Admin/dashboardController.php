<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Userdonate;

class dashboardController extends Controller
{
    public function index(){

        $posts = Post:: where("user_id",'!=',auth()->id())->where('bloodgp_id',auth()->user()->profile->bloodgp_id)->where("status",1)->get();
        // dd($posts);
        return view('admin.dashboard.index',compact("posts"));
    }

    public function user($id){
        $count = Userdonate::where('post_id',$id)->get();
        $countapply =  count($count);

        // if($countapply < 3){
        //     return $countapply;
        // }
        // dd($countapply);
        $userdonate = Userdonate::where('user_id',auth()->id())->where('post_id',$id)->first();
      
        $postdoner = Post::where("id",$id)->first();
        // dd($postdoner);
        return view('admin.dashboard.user',compact('postdoner','userdonate','countapply'));
    } 
    public function user_apply(){
        $data = request()->validate([
            "date" => 'required'
        ]);

        $date = request('date');
        $post_id = request('post_id');
       
        $userdonate = new Userdonate(); 
        $userdonate->user_id = auth()->id();
        $userdonate->post_id = request('post_id');
        $userdonate->date = request('date');
        $userdonate->save();
        return response()->json([
            "message" => 'done'
        ]);
        
    }
}
