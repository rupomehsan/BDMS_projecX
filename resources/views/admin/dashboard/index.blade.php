@extends('layouts.index')
@section('content')
    
      <!-- Page Content -->
      <div id="page-content-wrapper">
        <div class="container-fluid xyz">
           <div class="row">
               <div class="col-md-9 col-sm-12"> 
                  <div class="row">
                     <div class="col-md-7 top-left">
                       <div class="search-bd">
                          <h4>search for blood?</h4>
                        </div>
                        <div class="underline"></div>
                        <div class="wrt-post">
                           <span><i class="fas fa-edit"></i></span>
                           <p>write post</p>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                             <div class="dash-box">
                                <p class="bnt-st">you have <br> donate blood</p>
                                <div class="dash-text float-left">
                                   <h6> <span>102</span>  days ago</h6>
                                  
                                </div>
                                <p class="can-dnt"> ** you can blood donate know</p>
                             </div>
                           </div>
                           <div class="col-md-6">
                             <div class="dash-box">
                                <p class="bnt-st">you have <br> donate blood</p>
                                <div class="dash-text float-left">
                                   <h6> <span>24</span> near you</h6>
                                  
                                </div>
                                <p class="can-dnt"> ** you can blood donate know</p>
                             </div>
                           </div>
                         
                        
                      
                       </div>

                      
                     </div>

                     <div class="col-md-5">
                        <img src="assates/images/blood-mg.JPG" width="100%">
                     </div>
                  </div>
                  <div class="bootom-part">
                    <div class="search-bd">
                       <h4>who are seeking for blood</h4>
                     </div>
                     <div class="underline"></div>
                     <div class="search mt-b d-flex ">
                        <div class="search-bar">
                           <form class="form-inline my-2 my-lg-0" >
                              <input class="form-control mr-sm-2" type="search" placeholder="Select location" aria-label="Search">
                              <button type="submit"><i class="fas fa-map-marker-alt"></i></button>
                            </form>
                        </div>
                        <div class="search-bar ml-3">
                           <form class="form-inline my-2 my-lg-0" >
                              <input class="form-control mr-sm-2" type="search" placeholder="Near Your" aria-label="Search">
                              <button type="submit"><i class="far fa-times-circle"></i></i></button>
                            </form>
                        </div>
                     </div>
                  
                     <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-md-4">
                          
                           <a href="{{url('/user',$post->id)}}" style="list-style: none;text-decoration:none;color:black">
                              <div class="dash-box need-dnr emergency">
                                 <div class="profile-top">
                                    <img src="assates/images/u-xl-12.jpg" alt="" height="30" width="30">
                                    <h6 class="name">{{$post->user->name}}</h6>
                                       <i class="fas fa-tint"></i>
                                       <div class="bld-nm"></div>{{$post->bloodgp->name}}</span>
                                 </div>
                                 <hr>
                                 <div class="need-dnr-bottom">
                                    <div class="col-8 left">
                                       <p> <i class="fas fa-map-marker-alt"></i>{{$post->station->name}},{{$post->district->name}},{{$post->division->name}}</p>
                                       <p> <i class="fas fa-plus-square"></i>{{$post->hospital_name}}</p>
                                    </div>
                                    <div class="col-4">
                                   
                                     @if ($post->emergency == 1)
                                     <i class="fas fa-bell"></i><br><br>
                                     <p>emergency</p>
                                     @endif
                                  
                                    </div>
                                 </div> 
                              </div>
                           </a>
                         
                          
        
                        </div>
                        @endforeach
                       
                       

                      
                        
                     </div>
                  </div>
                
                 
               </div>
               @include('partial.right_sight')



@endsection