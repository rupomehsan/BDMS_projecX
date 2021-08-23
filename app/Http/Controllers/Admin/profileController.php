<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class profileController extends Controller
{
    public function index(){
        $profiles = Profile::where("user_id",auth()->id())->first();
        return view('admin.profile.index',compact('profiles'));
    }

    public function update($id){
        $updateuser = Profile::where('id',$id)->first();
        // dd($updateuser);
        $updateuser->user_desc = request('user_desc');
        $updateuser->update();
        return response()->json([
            "message" => "done"
        ]);


    }


}
