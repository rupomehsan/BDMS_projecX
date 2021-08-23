<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0"> 
        
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assates/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assates/css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container login">
       <div class="row ">
         <div class="form-box">
           <div class="col-md-12">
            <h1>Login</h1>
            <hr>
            @if (Session::has('message'))
            <div class="alert alert-danger"> {{Session::get('message')}}</div>
               
            @endif
            <form action="{{route('login.create')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                     @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <button class="btn btn-success mt-3" type="submit" >Submit</button>
                <hr>
              
            </form>
            <a href="{{route('registration.index')}}"><button class="btn btn-success mt-3" type="btn" >Register</button></a>
        </div>
    </div>
</div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{{asset('assates/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assates/js/bootstrap.min.js')}}"></script>
</body>
</html>