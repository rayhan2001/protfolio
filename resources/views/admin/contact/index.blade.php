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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{substr($contact->subject,0,50)}}</td>
                                <td>{{substr($contact->message,0,100)}}</td>
                                <td>
                                    <a href="{{route('contacts.edit',$contact->id)}}" class="btn btn-outline-primary"><i class="feather icon-edit"></i></a>
                                    <form action="{{route('contacts.destroy',$contact->id)}}" method="post" style="display:inline-block;">
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
