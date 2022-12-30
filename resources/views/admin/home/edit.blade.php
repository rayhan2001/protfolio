@extends('master.admin_app')
@section('title')
    Edit Content
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
                        <li class="breadcrumb-item active">Edit Content</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('home.update',$home->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="form-label">Title<span class="text-danger"> *</span></label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$home->title}}">
                                    <div class="clearfix"></div>
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Twitter<span class="text-danger"> *</span></label>
                                    <input type="url" name="twitter" class="form-control @error('twitter') is-invalid @enderror" value="{{$home->twitter}}">
                                    <div class="clearfix"></div>
                                    @error('twitter')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Github<span class="text-danger"> *</span></label>
                                    <input type="url" name="github" class="form-control @error('github') is-invalid @enderror" value="{{$home->github}}">
                                    <div class="clearfix"></div>
                                    @error('github')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Instagram</label><span class="text-danger"> *</span>
                                    <input type="url" name="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{$home->instagram}}">
                                    <div class="clearfix"></div>
                                    @error('instagram')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Linkedin<span class="text-danger"> *</span></label>
                                    <input type="url" name="linkedin" class="form-control @error('linkedin') is-invalid @enderror" value="{{$home->linkedin}}">
                                    <div class="clearfix"></div>
                                    @error('linkedin')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label w-100">File input <span class="text-danger"> *</span></label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    <img src="{{asset($home->image)}}" alt="" width="50" class="img-thumbnail mt-2">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
