@extends('backend.layouts.index')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                    class="fa fa-arrow-left"></i></a> Home Section</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Home Section</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div style="display: flex; justify-content: space-between;">
                                <h2><strong>Home Section</strong> List</h2>
                                {{-- <a href="{{ route('home-section.create') }}" class="btn btn-primary"
                                    style="float: right">Add</a> --}}
                                <!-- Add Btn Modal Button trigger -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                                    Add
                                </button>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Resume</th>
                                            <th>GitHub Link</th>
                                            <th>LinkedIn Link</th>
                                            <th>Others Link</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($homeSection as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->designation }}</td>
                                                <td>{{ $row->resume }}</td>
                                                <td>{{ $row->github_link }}</td>
                                                <td>{{ $row->linkedin_link }}</td>
                                                <td>{{ $row->others_link }}</td>
                                                <td>Active</td>
                                                <td>Edit/Delete</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Add Btn Modal View -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="myModalForm" action="{{ route('home-section.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
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

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="form_submit_btn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).on("click", "#form_submit_btn", function(e) {
        e.preventDefault();
        const form = document.getElementById('myModalForm');
        const data = new FormData(form);

        $.ajax({
            url: "{{ route('hs.store.ajax') }}",
            type: "POST",
            data: data,
            processData: false,
            contentType: false,

            success: function(response) {
                console.log("response ki?", response)
                // console.log("Form submitted successfully");
                window.location.reload();
            },
            error: function(xhr, status, error) {
                console.error("Error", error);
            }
        })
        return false;
    })
</script>
