@extends('backend.layouts.index')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                    class="fa fa-arrow-left"></i></a> Add Home Section</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Add Home Section</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div style="display: flex; justify-content: space-between;">
                                <h2><strong>Add</strong> Home Section</h2>
                                <a href="{{ route('home-section.index') }}" class="btn btn-primary" style="float: right">All</a>
                            </div>
                        </div>
                        <div class="body">
                            <form action="{{ route('home-section.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                placeholder="Enter Full Name"
                                                class="form-control @error('name') is-invalid @enderror">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="designation" value="{{ old('designation') }}"
                                                placeholder="Enter Designation"
                                                class="form-control @error('designation') is-invalid @enderror">
                                            @error('designation')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="resume" value="{{ old('resume') }}"
                                                placeholder="Enter Resume Name"
                                                class="form-control @error('resume') is-invalid @enderror">
                                            @error('resume')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="github_link" value="{{ old('github_link') }}"
                                                placeholder="Enter Github Link"
                                                class="form-control @error('github_link') is-invalid @enderror">
                                            @error('github_link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="linkedin_link" value="{{ old('linkedin_link') }}"
                                                placeholder="Enter LinkedIn Link"
                                                class="form-control @error('linkedin_link') is-invalid @enderror">
                                            @error('linkedin_link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="others_link" value="{{ old('others_link') }}"
                                                placeholder="Enter Others Link"
                                                class="form-control @error('others_link') is-invalid @enderror">
                                            @error('others_link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-simple">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
