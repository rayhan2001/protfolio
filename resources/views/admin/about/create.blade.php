@extends('master.admin_app')
@section('title')
    About
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
                            <form action="{{route('about.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label w-100">Image input <span class="text-danger"> *</span></label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label w-100">Resume input <span class="text-danger"> *</span></label>
                                    <input type="file" name="resume" class="form-control @error('resume') is-invalid @enderror">
                                    @error('resume')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Title_1<span class="text-danger"> *</span></label>
                                    <textarea name="title_1" rows="3" class="form-control @error('title_1') is-invalid @enderror" placeholder="Title_1"></textarea>
                                    <div class="clearfix"></div>
                                    @error('title_1')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Title_2<span class="text-danger"> *</span></label>
                                    <textarea name="title_2" rows="3" class="form-control @error('title_2') is-invalid @enderror" placeholder="Title_2"></textarea>
                                    <div class="clearfix"></div>
                                    @error('title_2')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Title_3<span class="text-danger"> *</span></label>
                                    <textarea name="title_3" rows="3" class="form-control @error('title_3') is-invalid @enderror" placeholder="Title_3"></textarea>
                                    <div class="clearfix"></div>
                                    @error('title_3')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Birthday</label><span class="text-danger"> *</span>
                                            <input type="date" name="birthday" class="form-control @error('birthday') is-invalid @enderror">
                                            <div class="clearfix"></div>
                                            @error('birthday')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Age<span class="text-danger"> *</span></label>
                                            <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" placeholder="Age">
                                            <div class="clearfix"></div>
                                            @error('age')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Country</label><span class="text-danger"> *</span>
                                            <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" placeholder="Country">
                                            <div class="clearfix"></div>
                                            @error('country')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">City<span class="text-danger"> *</span></label>
                                            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="City">
                                            <div class="clearfix"></div>
                                            @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Degree</label><span class="text-danger"> *</span>
                                            <input type="text" name="degree" class="form-control @error('degree') is-invalid @enderror" placeholder="Degree">
                                            <div class="clearfix"></div>
                                            @error('degree')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Email<span class="text-danger"> *</span></label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                            <div class="clearfix"></div>
                                            @error('email')
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
