<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\District;
use App\Models\Station;
use App\Models\Religion;
use App\Models\Bloodgroup;
use App\Models\User;
use App\Models\Profile;
use App\Models\Role;
use Image;
use Str;
use Illuminate\Support\Facades\Hash;

class registrationController extends Controller
{
    public function index(){
        $divisions = Division::all();
        $religions = Religion::all();
        $bloodgps = Bloodgroup::all();
        return view('auth.registration',compact('divisions','religions','bloodgps'));
        }

    public function store(){
        $data = request()->validate([
            'first_name' => 'required|min:5',
            // 'last_name'  => 'required|min:5',
            'email'      => 'required|unique:users',
            'password'   => 'required',
            'address'    => 'required',
            'phone'      => 'required',
            'alt_phone'  => 'required',
            'gender'     => 'required',
            'date_ob'    => 'required',
            // 'image'      => 'required',
            'religion_id'=> 'required',
            'bloodgp_id' => 'required',
            'station_id' => 'required',
            'district_id'=> 'required',
            'division_id'=> 'required'
           
        ]);

        $username = request('first_name');
        $email    = request('email');
        $password = request('password');

        $user = new User();
        
        $user->name =  $username;
        $user->email =  $email;
        $user->password =  Hash::make($password);
        // $user->role_id =  2;
        $user->save();
        if($user){
            $profile = new Profile();
            $profile->first_name  = request('first_name');
            $profile->last_name   = request('last_name');
            $profile->email       = $user->email;
            $profile->address     = request('address');
            $profile->password    = $user->password;
            $profile->phone       = request('phone');
            $profile->alt_phone   = request('alt_phone');
            $profile->gender      = request('gender');
            $profile->date_ob     = request('date_ob');
            $profile->user_desc   = "Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Ratione Error Animi Est Suscipit Iusto Quam Voluptatem Reprehenderit Ipsum, Minus Delectus Tempore, Laudantium Rem Velit Maiores Doloribus Quo Laboriosam! Eos Veritatis Inventore Magni Quidem, Suscipit Quos Incidunt? Deserunt Porro Id Asperiores Aperiam Dignissimos Dolore Tempore Aspernatur Consequuntur? Voluptates Repellendus Atque Necessitatibus.";
            $profile->role_id     = Role::IS_USER ;
            $profile->user_id     = $user->id;
            $profile->religion_id = request('religion_id');
            $profile->bloodgp_id  = request('bloodgp_id');
            $profile->division_id = request('division_id');
            $profile->district_id = request('district_id');
            $profile->station_id  = request('station_id');
    
            // $image = request()->file('image');
    
            // if (!file_exists('uploads/users')) {
            //     $dir = mkdir('uploads/users');
            // }
            // if (request()->has('image')) {
            //     $image_url = 'uploads/users/' . Str::random(6) . '.' . $image->getClientOriginalExtension();
            //     Image::make($image)->save($image_url, 80);
            //     $profile->image = $image_url;
            // }
    
            $profile->save();
        }
       
        return redirect()->back()->with('message','Registration Seccessfully Complite');

    }



    public function get_district_by_divition_id($id){
        $get_district = District::where('division_id',$id)->get();
        return response([
            "status" => "done",
            "district" => $get_district
        ]);
    }

    public function get_station_by_district_id($id){
        $get_station = Station::where('district_id',$id)->get();
        return response([
            "status" => "done",
            "station" => $get_station
        ]);
    }
}
