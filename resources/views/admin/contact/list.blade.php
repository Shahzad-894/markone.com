@extends('admin.main')
@section('middle')    
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                   
                    <h3 class="box-title">Admin List</h3>
                </div>
                <!-- /.box-header -->
                
    
                   <br>
                <div class="box-body">
                    <h4 style="float:right;color: red;">Not Seen Email: {{$not_seen}}</h4>
                    <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            
                            <td>Name</td>                            
                            <td>Email</td>
                            <td>Date</td>
                            <td>Subject</td>
                            <td>Message</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
                       @foreach($data as $val)
                       <tr>
                       	<td>{{$val->name}}</td>
                       	<td>{{$val->email}}</td>
                        <td>{{$val->date}}</td>
                       	<td>{{$val->subject}}</td>
                        <td>{{$val->message}}</td>
                        <td>
                        @if($val->status =='not_seen')
                        <a href="{{url('seen_email')}}/{{ $val->id }}" class="btn btn-warning" style="margin-left: 4px;">Not Seen</a>
                        @else
                         <a href="#" class="btn btn-success" style="margin-left: 4px;">Seen</a>
                        @endif
                        </td>
                        <td><a href="{{ url('delete_email') }}/{{ $val->id }}" class="btn btn-danger" style="margin-left: 4px;">
                            <i class="fas fa-fw fa-trash"></i></a></td>
                       	
                       	</td>
                       </tr>
                       @endforeach
                      
                        </tbody>
                    </table>
                </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
  


@endsection