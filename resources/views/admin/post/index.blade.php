@extends('layouts.index')
@section('content')
    <div class="post-container">
        <div class="row">
            <div class="col-md-9">
                <div class="content">

               
               <div class="form-container">
                @if (Session::has('message'))
                <div class="alert alert-success font-weight-bold" > {{Session::get('message')}}</div> 
                @endif
                   <div class="form-wrapper">
                    <form action="{{route('posts.store')}}" method="post">
                        @csrf
                        <div class="emrg-btn">
                            <p>Emergency </p>
                            <label class="switch">
                             <input type="checkbox" id="emergency" name="emergency"  >
                             <span class="slider round"></span>
                           </label>
                        </div>
                        <textarea name="post_desc" class="form-control" id="" cols="30" rows="10"></textarea>
                        @error('post_desc')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <div class="row input-container">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="">Blood group Needed</label>
                                    <select class="form-control"  name="bloodgp_id" id="">
                                        <option disabled selected>Select Bloodgroup</option>
                                        @foreach ($bloodgps as $bloodgp)
                                        <option value="{{$bloodgp->id}}">{{$bloodgp->name}}</option>
                                    @endforeach
                                    </select>
                                    @error('bloodgp_id')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label for="">Hospital name</label>
                                <input type="text" name="hospital_name" class="form-control" placeholder="Enter hospilat name">
                                @error('hospital_name')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                               </div>
                               <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter phone">
                                @error('hospital_name')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                               </div>
                                <div class="form-group">
                                <label for="">Date</label>
                                <input type="text" name="date" class="form-control" placeholder="Enter phone">
                                @error('date')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                              </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Location</label>
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
                                    <label for="">District</label>
                                    <select class="form-control"  name="district_id" id="district_id">
                                        <option disabled selected>Select district</option>
                                    </select>
                                    @error('district_id')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Station</label>
                                    <select class="form-control"  name="station_id" id="station_id">
                                        <option disabled selected>Select station</option>
                                    </select>
                                    @error('station_id')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                               
                              
                            </div>
                          
                        </div>
                        <button type="submit" class="btn btn-danger">POST</button>
                    </form>
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

            $("#emergency").click(function(){
                 $falsevalu = $("#emergency")
                if($falsevalu.attr('value')){
                    $falsevalu.removeAttr('value');
                }else{
                    $falsevalu.attr('value', "1");
                }
            });
           


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
@endpush