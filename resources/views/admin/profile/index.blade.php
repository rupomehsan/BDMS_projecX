@extends('layouts.index')
@section('content')
    <div class="profile-container">
        <div class="row">
            <div class="col-md-5">
                <div class="profile">
                    <div class="icon">
                         <button type="button" class="btn btn-danger btn-lg " data-toggle="modal" data-target="#myModal"> <i class="fas fa-edit"></i></button> 
                    </div>
                   @if ($profiles->image)
                     <img src="{{$profiles->image}}" alt="">
                     @else
                     <img src="{{asset('assates/images/avatar.png')}}" alt="">
                   @endif
                   
                    <h4>{{$profiles->first_name}} {{$profiles->last_name}}</h4>
                
                        @if($profiles->user_desc)
                            <p>{{$profiles->user_desc}}</p>
                        @endif
                
                    <p><i class="fas fa-map-marker-alt"></i> location : {{$profiles->station->name}},{{$profiles->district->name}},{{$profiles->division->name}}</p>
                    <div class="bld-rp">
                        <i class="fas fa-tint"></i>
                        <p>blood group</p>
                        <span>{{$profiles->bloodgp->name}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="activity">
                    <div class="heading">
                        <h2>activity log</h2>
                        <div class="underline"></div>
                    </div>
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>time</th>
                            <th>action</th>
                            <th></th>

                            <div class="tbl-underline"><div class="dot"></div></div>
                        </tr>
                        <tr></tr>
                      
                        <tr>
                            <td>01/05/2021</td>
                            <td>12:43:02</td>
                            <td>login vhia google crome</td>
                        </tr>
                        <tr>
                            <td>01/05/2021</td>
                            <td>12:43:02</td>
                            <td>login vhia google crome</td>
                        </tr>
                        <tr>
                            <td>01/05/2021</td>
                            <td>12:43:02</td>
                            <td>login vhia google crome</td>
                        </tr>
                        <tr>
                            <td>01/05/2021</td>
                            <td>12:43:02</td>
                            <td>login vhia google crome</td>
                        </tr>
                        <tr>
                            <td>01/05/2021</td>
                            <td>12:43:02</td>
                            <td>login vhia google crome</td>
                        </tr>
                        <tr>
                            <td>01/05/2021</td>
                            <td>12:43:02</td>
                            <td>login vhia google crome</td>
                        </tr>
                        <tr>
                            <td>01/05/2021</td>
                            <td>12:43:02</td>
                            <td>login vhia google crome</td>
                        </tr>
                        <tr>
                            <td>01/05/2021</td>
                            <td>12:43:02</td>
                            <td>login vhia google crome</td>
                        </tr>
                        <tr>
                            <td>01/05/2021</td>
                            <td>12:43:02</td>
                            <td>login vhia google crome</td>
                        </tr>
                        <tr>
                            <td>01/05/2021</td>
                            <td>12:43:02</td>
                            <td>login vhia google crome</td>
                        </tr>
                        <tr>
                            <td>01/05/2021</td>
                            <td>12:43:02</td>
                            <td>login vhia google crome</td>
                        </tr>
                       
                    </table>
                </div>
               
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn close btn-primary" data-dismiss="modal">Close</button>
             
            </div>
            @if (Session::has('message'))
            <div class="alert alert-success font-weight-bold" > {{Session::get('message')}}</div> 
            @endif
            <form id="updateProfile" method="post">
              @csrf
                <div class="modal-body">
          
                   
                      <input type="hidden" name="profile_id" id="profile_id" value="{{$profiles->id}}">
                      <label for="" style="float: left">Enter your Bio-data :</label>
                      <div class="form-group">
                        <textarea name="user_desc" id="user_desc" cols="30" rows="10" class="form-control">{{$profiles->user_desc}}</textarea>
                        @error('user_desc')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <button type="submit" class="btn btn-danger mt-3">Submit</button>
                      </div>
                    
             
                </div>
                
            </form>
           
          </div>
          
       
      </div>
      
    </div>
@endsection

@push('custom_js')
    <script>
        $(document).ready(function(){
            $('#updateProfile').submit(function(e){
                e.preventDefault();
                $user_desc = $('#user_desc').val();
                $profile_id = $('#profile_id').val();
                console.log($user_desc,$profile_id);
                $.ajax({
                    url : '{{url('/profile/update')}}/' + $profile_id ,
                    method: 'post',
                    data : {
                        '_method' : 'PATCH',
                        '_token' : '{{csrf_token()}}',
                        'user_desc' : $user_desc,
                    },
                    success : function(res){
                        console.log(res);
                        if(res.message === "done"){
                            $('#user_desc').before('<div class="alert alert-success success mt-2" style="text-align:left;display:block;width:100%"><b>Profile Update Successfully</b></div>')
                            $('#user_desc').val('')
                            setTimeout((function() {
                            window.location.reload();
                            }), 1000);
                        }
                    },
                    error : function(err){
                        console.log(err);
                    }
                })
            })
        })
    </script>
@endpush