<div style="margin-top: 90px;" id="wrapper" class="toggled-2">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
       <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
         <li class="active">
            <a href="{{route('dashboard.index')}}"><span class="fa-stack fa-lg pull-left"><i class="fab fa-windows"></i></span>Dashboard</a>
             {{-- <ul class="nav-pills nav-stacked" style="list-style-type:none;">
               <li><a href="{{route('dashboard.user')}}">User dashboard</a></li>
             
            </ul>  --}}
         </li>

          {{-- <i class="fas fa-hand-holding-water"></i> --}}
          {{-- <li >
           
             <a href="{{route('dashboard.user')}}"><span class="fa-stack fa-lg pull-left"><i class="fas fa-hand-holding-heart"></i></span> X-donor</a>
           
          </li> --}}
         
          <li>
             <a href="{{route('history.index')}}"><span class="fa-stack fa-lg pull-left"><i class="fas fa-history"></i></span>History</a>
            
          </li>
          <li>
             <a href="{{route('profile.index')}}"> <span class="fa-stack fa-lg pull-left"><i class="fas fa-user-alt"></i></span>Profile</a>
          </li>
          <li>
             <a href="{{route('posts.index')}}"> <span class="fa-stack fa-lg pull-left"><i class="far fa-edit"></i></span>Post</a>
          </li>
         
       </ul>
    </div>
    <!-- /#sidebar-wrapper -->