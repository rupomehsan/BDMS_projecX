<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\District;
use App\Models\Station;
use App\Models\Post;
use App\Models\Bloodgroup;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::all();
        $bloodgps = Bloodgroup::all();
        return view('admin.post.index',compact('divisions','bloodgps'));
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
        $data = request()->validate([
            "post_desc"  => 'required',
            "bloodgp_id" => 'required',
            "phone"      => 'required',
            "division_id" => 'required',
            "district_id" => 'required',
            "station_id"  => 'required',
            "hospital_name" => 'required',
            "date" => 'required',
        ]);

        // dd($data);

        $post = new Post();
        $post->user_id = auth()->id();
        $post->bloodgp_id = request("bloodgp_id");
        $post->post_desc = request("post_desc");
        $post->phone = request("phone");
        $post->division_id = request("division_id");
        $post->district_id = request("district_id");
        $post->station_id = request("station_id");
        $post->hospital_name = request("hospital_name");
        $post->emergency =    request("emergency") ?? 0 ;
        $post->date =    request("date");

        $post->save();
        return redirect()->back()->with("message","Post Succsessfully Created");
       


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
