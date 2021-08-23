@extends('layouts.index')
@section('content')
    <div class="user-dashbord">
        <div class="row">
            <div class="col-md-9">
                <div class="wrapper">
                    <div class="top-part">
                        <div class="imgname">
                            <img src="{{asset('assates/images/u-xl-12.jpg')}}" alt="">
                            <h6 class="name">{{$postdoner->user->name}}</h6>
                            <i class="fas fa-tint"></i><i class="bld-gp">{{$postdoner->bloodgp->name}}</i>
                        </div>
                        
                       
                        <div class="emg-blg">
                           
                            @if ($postdoner->emergency == 1)
                               <i class="fas fa-bell"></i><br>
                              <span>emergency</span>
                            @endif
                            {{-- <i class="fas fa-bell"></i><br>
                           <span>emergency</span> --}}
                        </div>
                        
    
                    </div>
                    <div class="middle-part">
                        <p><i class="fas fa-map-marker-alt"></i>{{$postdoner->station->name}},{{$postdoner->district->name}},{{$postdoner->division->name}}</p>
                        <p> <i class="fas fa-plus-square"></i> {{$postdoner->hospital_name}}</p>
                       <p>{{$postdoner->post_desc}}</p>
                    </div>
                    <div class="bottom-part">
                        <p class="number"><i class="fas fa-phone-alt"></i>{{$postdoner->phone}}</p>
                        <div class="donatin-part">
                            <p>are you Donating?</p>
                            {{-- <button class="btn btn-danger" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Yes I'm</button> --}}
                           <!-- Button trigger modal -->
                       
                       


                            @if ($userdonate)
                            <button type="button" class="btn btn-danger btn-lg disabled" data-toggle="modal" data-target="#myModal">Can't Apply</button>
                            @elseif ($countapply > 3)
                            <button type="button" class="btn btn-danger btn-lg disabled" data-toggle="modal" data-target="#myModal">3 person Apply</button>
                            @else
                            <button type="button" class="btn btn-danger btn-lg " data-toggle="modal" data-target="#myModal">Yes I'm</button> 
                            @endif
                        
                            <!-- Trigger the modal with a button -->
                            
                            {{-- @if (!$userdonate)
                            <button type="button" class="btn btn-danger btn-lg " data-toggle="modal" data-target="#myModal">Yes I'm</button>    
                            @else
                            <button type="button" class="btn btn-danger btn-lg disabled" data-toggle="modal" data-target="#myModal">Can't Apply</button>
                            @endif
                            --}}
                          
                            <!-- Modal -->
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
                                  <form id="applyForm" method="post">
                                    @csrf
                                      <div class="modal-body">
                                
                                            <input type="hidden" name="post_id" id="post_id" value="{{$postdoner->id}}">
                                            <label for="" style="float: left">Enter your Date :</label>
                                            <div class="form-group">
                                              <input type="text" class="form-control" name="date" id="date" placeholder="D/M/Y">
                                              @error('bloodgp_id')
                                              <div class="alert alert-danger">{{$message}}</div>
                                              @enderror
                                              <button type="submit" class="btn btn-danger mt-3">Apply Now</button>
                                            </div>
                                          
                                   
                                      </div>
                                      
                                  </form>
                                 
                                </div>
                                
                             
                            </div>
                            
                          </div>





                        </div>
                      
                    </div>
                   
                </div>
               
              </div>
              @include('partial.right_sight')
        </div>
      
    </div>
   
@endsection
@push('custom_js')
    <script>
        $(document).ready(function(){
            $('#applyForm').submit(function(e){
                e.preventDefault()
                $('.error').remove()
                $date = $('#date').val();
                $post_id = $('#post_id').val();

                console.log($date,$post_id);

                $.ajax({
                    url : '{{url('user/apply')}}',
                    method : 'post',
                    data : {
                        "_token"    : '{{csrf_token()}}',
                        "date"    : $date,
                        "post_id" : $post_id,
                    },

                    success:function(data){
                        console.log(data)
                        if(data.message === "done"){
                            $('#date').before('<div class="alert alert-success success mt-2" style="text-align:left;display:block;width:100%"><b>Your are Successfully Applied</b></div>')
                            $('#date').val('')

                        }
                        setTimeout((function() {
                        window.location.reload();
                        }), 1000);

                    },
                    error : function(err){
                        console.log(err);
                        if(err){
                           let error =  err.responseJSON.errors
                           if(error.date){
                               $('#date').after('<div class="alert alert-danger error mt-2" style="text-align:left;display:block;width:100%">This field is required</div>')
                           }
                        }
                      
                    }


                })

            })
        })
    </script>
@endpush