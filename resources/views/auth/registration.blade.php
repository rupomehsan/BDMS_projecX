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
    <div class="container registration">
        <div class="row ">
            <div class="form-box">
            <div class="col-md-12">
                <h1>Registration</h1>
                <hr>
                @if (Session::has('message'))
                <div class="alert alert-success font-weight-bold" > {{Session::get('message')}}</div>
                   
                @endif
                <form action="{{route('registration.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">first name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="Enter your first name" value="{{old('first_name')}}" >
                            @error('first_name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your Email" value="{{old('email')}}">
                            @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        
                        {{-- <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="confirmpassword" class="form-control" value="{{old('confirmpassword')}}">
                            @error('confirmpassword')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div> --}}
                        
                        <div class="form-group">
                            <label for="">address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter your address" value="{{old('address')}}">
                            @error('address')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label for="">phone</label>
                            <input type="number" name="phone" class="form-control" placeholder="Enter your phone"  value="{{old('phone')}}">
                            @error('phone')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">alternate phone</label>
                            <input type="number" name="alt_phone" class="form-control" placeholder="Enter your alternate phone" value="{{old('alt_phone')}}">
                            @error('alt_phone')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">date of birth</label>
                            <input type="text" name="date_ob" class="form-control" value="{{old('date_ob')}}" placeholder="20/05/1995">
                            @error('date_ob')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">gender</label><br>
                            <input type="radio" id="gender" name="gender" value="Male">Male
                            <input type="radio" id="gender" name="gender" value="Female">Female
                            @error('gender')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="">image</label>
                            <input type="file" name="image" class="form-control" value="{{old('image')}}">
                            @error('image')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div> --}}
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">last name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Enter your last name" value="{{old('last_name')}}">
                            @error('last_name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" name="password" class="form-control" value="{{old('password')}}">
                            @error('password')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                       
                        {{-- <div class="form-group">
                            <label for="">role</label>
                           <select class="form-control"  name="role_id" id="">
                               <option disabled selected>Select role</option>
                           </select>
                            @error('role')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="">division</label>
                            <select class="form-control"  name="division_id" id="division_id">
                                <option disabled selected>Select divition</option>
                                @foreach ($divisions as $division)
                                    <option value="{{$division->id}}">{{$division->name}}</option>
                                @endforeach
                            </select>
                            @error('division_id')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">district</label>
                            <select class="form-control"  name="district_id" id="district_id">
                                <option disabled selected>Select district</option>
                            </select>
                            @error('district_id')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">station</label>
                            <select class="form-control"  name="station_id" id="station_id">
                                <option disabled selected>Select station</option>
                            </select>
                            @error('station_id')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">blood group</label>
                            <select class="form-control"  name="bloodgp_id" id="">
                                <option disabled selected>Select station</option>
                                @foreach ($bloodgps as $bloodgp)
                                <option value="{{$bloodgp->id}}">{{$bloodgp->name}}</option>
                            @endforeach
                            </select>
                            @error('bloodgp_id')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">religion</label>
                            <select class="form-control"  name="religion_id" id="">
                                <option disabled selected>Select religion</option>
                                @foreach ($religions as $religion)
                                <option value="{{$religion->id}}">{{$religion->name}}</option>
                            @endforeach
                            </select>
                            @error('religion_id')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                      
                        
                    </div>
                </div>
                   
                    <button class="btn btn-success mt-3" type="submit">Submit</button>
                </form>
                <hr>
                <a href="{{route('login')}}"><button class="btn btn-success mt-3" type="btn" >Login</button></a>
            </div>
            </div>
        </div>
    
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{{asset('assates/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assates/js/bootstrap.min.js')}}"></script>

  <script>
      $(document).ready(function(){
        $('#division_id').change(function () {
                var division_id = $('#division_id').val()

                $.ajax({
                    url: '{{url('api/get-district')}}/' + division_id,
                    method: 'get',
                    datatype: 'json',
                    success: function (res) {
                        console.log(res)
                        if (res.status == 'done') {
                            $('#district_id').empty()
                            $('#district_id').append(`
                        <option disabled selected>Select Your District</option>
                        `)
                            res.district.forEach(function (item) {
                                $('#district_id').append(`
                         <option value="${item.id}" >${item.name}</option>
                         `)
                            })
                        }
                    },
                    error: function (err) {
                        console.log(error)
                    }
                })
            })

            $('#district_id').change(function () {
                var district_id = $('#district_id').val()

                $.ajax({
                    url: '{{url('api/get-station')}}/' + district_id,
                    method: 'get',
                    datatype: 'json',
                    success: function (res) {
                        console.log(res)
                        if (res.status == 'done') {
                            $('#station_id').empty()
                            $('#station_id').append(`
                        <option value="">Select Your Station</option>
                        `)
                            res.station.forEach(function (item) {
                                $('#station_id').append(`
                         <option value="${item.id}" >${item.name}</option>
                         `)
                            })
                        }

                    },
                    error: function (err) {
                        console.log(err)
                    }
                })
            })
      })
  </script>
</body>
</html>