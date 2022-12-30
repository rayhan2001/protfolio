@extends('master.admin_app')
@section('title')
    View Contact
@endsection
@section('content')
    <div class="layout-content">
        <!-- [ content ] Start -->
        <div class="container-fluid flex-grow-1 container-p-y">
            <div class="page-title">
                <h4 class="">View Content</h4>
                <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Home</li>
                        <li class="breadcrumb-item active">View Content</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('contacts.index')}}" class="btn btn-outline-info mb-3"><i class="feather icon-arrow-left"></i></a>
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" value="{{$contact->name}}">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" value="{{$contact->email}}">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control" value="{{$contact->subject}}">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="10">{{$contact->message}}</textarea>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
