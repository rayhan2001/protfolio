@extends('master.admin_app')
@section('title')
    Service
@endsection
@section('content')
    <div class="layout-content">
        <!-- [ content ] Start -->
        <div class="container-fluid flex-grow-1 container-p-y">
            <div class="page-title">
                <h4 class="">Add Content</h4>
                <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Home</li>
                        <li class="breadcrumb-item active">Add Content</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('service.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Title</label><span class="text-danger"> *</span>
                                            <input type="text" name="title1" class="form-control @error('title1') is-invalid @enderror" placeholder="Title">
                                            <div class="clearfix"></div>
                                            @error('title1')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Sub Title</label><span class="text-danger"> *</span>
                                            <input type="text" name="sub_title1" class="form-control @error('sub_title1') is-invalid @enderror" placeholder="Sub Title">
                                            <div class="clearfix"></div>
                                            @error('sub_title1')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Title</label><span class="text-danger"> *</span>
                                            <input type="text" name="title2" class="form-control @error('title2') is-invalid @enderror" placeholder="Title">
                                            <div class="clearfix"></div>
                                            @error('title2')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Sub Title<span class="text-danger"> *</span></label>
                                            <input type="text" name="sub_title2" class="form-control @error('sub_title2') is-invalid @enderror" placeholder="Sub Title">
                                            <div class="clearfix"></div>
                                            @error('sub_title2')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Title</label><span class="text-danger"> *</span>
                                            <input type="text" name="title3" class="form-control @error('title3') is-invalid @enderror" placeholder="Title">
                                            <div class="clearfix"></div>
                                            @error('title3')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Sub Title<span class="text-danger"> *</span></label>
                                            <input type="text" name="sub_title3" class="form-control @error('sub_title3') is-invalid @enderror" placeholder="Sub Title">
                                            <div class="clearfix"></div>
                                            @error('sub_title3')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


