<!DOCTYPE html>
<html lang="en" >
<head>
   <meta charset="UTF-8">
   <title>Blood Management system </title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'> -->
   <link rel="stylesheet" href="{{asset('assates/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('assates/css/dataTables.bootstrap5.css')}}">
   <link rel="stylesheet" href="{{asset('assates/css/all.css')}}">
   <link rel="stylesheet" href="{{asset('assates/css/fontawesome.min.css')}}">
   <link rel="stylesheet" href="{{asset('assates/css/style.css')}}">
   <link rel="stylesheet" href="{{asset('assates/css/responsive.css')}}">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script>
      
   </script>
</head>
<body>
<!-- partial:index.partial.html -->


<body>
   <nav class="navbar navbar-light bg-light fixed-top">
      <div class="container-fluid"> 
         <div class="navbar-header fixed-brand">
            <a class="navbar-brand" href="{{route('dashboard.index')}}"><img src="{{asset('assates/images/logo.png')}}" alt="" > </a>
            <a class="btn btn-danger mr" data-bs-toggle="offcanvas" href="'#offcanvasExample" role="button" aria-controls="offcanvasExample" id="menu-toggle-2">
               <i style="font-size: 20px;" class="fas fa-bars"></i>
            </a>

         </div>
         <div class="search-bar">
            <form class="form-inline my-2 my-lg-0" >
               <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
               <button type="submit"><i class="fas fa-search"></i></button>
             </form>
         </div>
         
         {{-- <div class="searchbar">
            <input class="search_input" type="text" name="" placeholder="Search...">
            <a href="{{asset('#" class="search_icon')}}"><i class="fas fa-search"></i></a>
          </div> --}}
         <div class="user-profile">
            <div class="user-image">
               <ul>
                  <!-- <li>
                     <a href="'#"><i class="far fa-envelope"></i></a>
                     <div class="radius-shap">5</div>
                  </li> -->
                  <li>
                     <a href="#"><i class="far fa-bell"></i></a>
                     <div class="radius-shap">3</div>
                  </li>
                  <ul class="sd-dn">
                     <li>
                        <div class="dropdown">
                           <button onclick="myFunction()" class="dropbtn">Language <i class="fas fa-caret-down"></i></button>
                           <div id="myDropdown" class="dropdown-content">
                             <a href="#home">English</a>
                             <a href="#about">Bangla</a>
                            
                           </div>
                         </div>
                     </li>
                  </ul>
                  <ul>
                     <li>
                        <a href="#">
                           <img src="assates/images/u-xl-12.jpg" alt=""><span>{{auth()->user()->profile->first_name  }} {{auth()->user()->profile->last_name}} <i class="fas fa-caret-down"></i></span>
                        </a>
                     </li>
                  </ul>
               </ul>
            </div>
             <div class="user-info">
                  <div class="user-child-profile">
                     <img src="assates/images/u-xl-12.jpg" alt="">
                     <span>{{auth()->user()->profile->first_name  }} {{auth()->user()->profile->last_name}}</span>
                     <span>{{auth()->user()->email  }}</span>
                  </div>
                  <div class="user_navbar">
                     <ul>
                        <li><a href="{{route('profile.index')}}"><i class="fas fa-user"></i> Profile</a></li>
                        <li><a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                     </ul>
                  </div>
               </div>
         </div>
      </div> 
   </nav>
  
      
      <!-- Header Top End -->