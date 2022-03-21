@extends('admin.main')
@section('middle')
<section id="aa-popular-category">
    <div class="col-md-12">
      
        <div class="col-md-8 col-md-offset-2">
           @if(session()->has('msg'))
           <div style="color: #fff;background-color:#ff2f00a6; font-weight: bold;text-align: center;" class="alert alert-success" role="alert" >
            {{session()->get('msg')}}
            </div>
            @endif
          <form action="{{ url('update_admin') }}" method="post">
            {{ csrf_field() }}
              <h1 style="text-align: center;">Edit Admin </h1>
                  <hr>

              <label for="email"><b>Email</b></label>
              <input type="text"  name="email" id="email" value="{{$data->email}}" >
              <input type="hidden"  name="id" value="{{$data->id}}" >

              <label for="psw"><b>Password</b></label>
              <input type="text" value="{{$data->password}}" name="password" id="psw" >
             
              <hr>
              <button type="submit" class="btn btn-primary">Update</button>
            

           
          </form>
        </div>

</div>
</section>
@endsection