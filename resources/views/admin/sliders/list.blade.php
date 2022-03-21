@extends('admin.main')

@section('middle')

<h3>Sliders list</h3>
<!-- <div class="row "  style="padding" > -->
<a style='float:right;' class='btn btn-success mb-3' href='{{ url("add_slider") }}'><i class="fas fa-fw fa-plus"></i>Add
    New
    Slider</a><br>
<!-- </div>  -->

<div class="bs-example">
    <table class="table table-striped responsive" id="example1">
        <thead>
            <tr>
                <th width="">S. NO</th>
                <th width="">Heading</th>
                <th width="">Title</th>
                <th width="">Image</th>
                <th width="">Status</th>
                <th width="">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $count=1; ?>
            @foreach($sliders as $slider)
            <tr>
                <td>{{ $count }}</td>
                <td>{{ $slider->save_tag}}</td>
                <td>{{ $slider->title}}</td>
                <td>
                    <img style="width: 100px; height:70px" src="{{asset('public/images/product/'.$slider->image)}}">
                </td>
                <td style="padding-top: 25px">@if($slider->status=='disable')
                    <a href="{{ url('slider_enable',$slider->id) }}" class="btn btn-success btn-sm">Enable</a>
                    @else
                    <a href="{{url('slider_disable',$slider->id)}}" class="btn btn-warning btn-sm">Disable</a>
                    @endif
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ url('edit_slider') }}/{{ $slider->id }}"><i class="fas fa-edit">
                        </i></a>
                    <a class="btn btn-danger" href="{{ url('delete_slider') }}/{{ $slider->id }}"><i
                            class="fas fa-fw fa-trash"></i></a>
                </td>
            </tr>
            <?php $count=$count+1; ?>
            @endforeach
        </tbody>
    </table>
    <br><br>
</div>
@endsection