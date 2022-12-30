@extends('master.admin_app')
@section('title')
    All Content
@endsection
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="page-title">
            <h4 class="">All Content</h4>
            <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Home</li>
                    <li class="breadcrumb-item active">All Content</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <table class="table table-hover card-table table-responsive">
                        <thead>
                        <tr class="text-center">
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Title_1</th>
                            <th>Title_2</th>
                            <th>Title_3</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($abouts as $about)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <img src="{{asset($about->image)}}" alt="" width="50">
                                </td>
                                <td>{{substr($about->title_1,0,50)}}</td>
                                <td>{{substr($about->title_2,0,50)}}</td>
                                <td>{{substr($about->title_3,0,20)}}</td>
                                <td>{{$about->status==1? 'Active' : 'Inactive'}}</td>
                                <td>
                                    @if($about->status==1)
                                        <a href="{{route('status',['id'=>$about->id])}}" class="btn btn-outline-info"><i class="feather icon-thumbs-up"></i></a>
                                    @else
                                        <a href="{{route('status',['id'=>$about->id])}}" class="btn btn-outline-warning"><i class="feather icon-thumbs-down"></i></a>
                                    @endif
                                    <a href="{{route('about.edit',$about->id)}}" class="btn btn-outline-primary"><i class="feather icon-edit"></i></a>
                                    <form action="{{route('about.destroy',$about->id)}}" method="post" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this item?')"><i class="feather icon-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
