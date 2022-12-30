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
                        <th>Title</th>
                        <th>Twitter</th>
                        <th>Github</th>
                        <th>Instagram</th>
                        <th>Linkedin</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($homes as $home)
                    <tr class="text-center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$home->title}}</td>
                        <td>{{$home->twitter}}</td>
                        <td>{{$home->github}}</td>
                        <td>{{$home->instagram}}</td>
                        <td>{{$home->linkedin}}</td>
                        <td>
                            <img src="{{asset($home->image)}}" alt="" width="50">
                        </td>
                        <td>{{$home->status==1? 'Active' : 'Inactive'}}</td>
                        <td>
                            @if($home->status==1)
                                <a href="{{route('status',['id'=>$home->id])}}" class="btn btn-outline-info"><i class="feather icon-thumbs-up"></i></a>
                            @else
                                <a href="{{route('status',['id'=>$home->id])}}" class="btn btn-outline-warning"><i class="feather icon-thumbs-down"></i></a>
                            @endif
                            <a href="{{route('home.edit',$home->id)}}" class="btn btn-outline-primary"><i class="feather icon-edit"></i></a>
                            <form action="{{route('home.destroy',$home->id)}}" method="post" style="display:inline-block;">
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
