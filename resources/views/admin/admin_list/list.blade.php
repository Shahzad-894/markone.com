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
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <td>Name</td>
                            <td>Email</td>
                            <td>Password</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $val)
                        <tr>
                            <td>{{$val->name}}</td>
                            <td>{{$val->email}}</td>
                            <td>{{$val->password}}</td>
                            <td>
                                @if(session()->get('role')=='admin')
                                <a href="{{ url('edit_admin') }}/{{ $val->id }}" class="btn btn-primary">
                                    <i class="fas fa-edit"> </i></a>

                                <a href="{{ url('delete_admin') }}/{{ $val->id }}" class="btn btn-danger"
                                    style="margin-left: 4px;">
                                    <i class="fas fa-fw fa-trash"></i></a>
                                @endif
                            </td>
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