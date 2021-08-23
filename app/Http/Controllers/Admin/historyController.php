<?php

namespace App\Http\Controllers\Admin;
use Carbon\Carbon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Userdonate;
use App\Models\Post;
class historyController extends Controller
{
    public function index(){
        $dt = Carbon::now();
        $day = $dt->day;
        $month = $dt->shortEnglishMonth;
        $year = $dt->year;
        $ago = $dt->subDays(5)->diffForHumans();  
        $histories = Userdonate::where('user_id',auth()->id())->where('status',1)->get();
        // $post_id = $histories->post_id;
        // $user_id = $histories->user_id;
        // $user_location = Post::where('id',$post_id)->where('user_id',$user_id)->get();
      
        return view('admin.history.index',compact('histories','day','month','year','ago'));
    }
}

