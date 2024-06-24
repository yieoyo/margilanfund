@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Edit Professor</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="{{ url('edit-professor') }}">Professors</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Professor</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Basic Info</h5>
                </div>
                <div class="card-body">
                    <form action="#" method="post" id="addStaffForm">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="First_Name">First Name</label>
                                    <input id="First_Name" type="text" class="form-control" value="Harry" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Last_Name">Last Name</label>
                                    <input id="Last_Name" type="text" class="form-control" value="Parker" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Email_Here">Email Here</label>
                                    <input id="Email_Here" type="text" class="form-control" value="info@example.com"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="datepicker">Joining Date</label>
                                    <div class="input-hasicon mb-xl-0 mb-3">
                                        <input placeholder="Joining Date" name="datepicker"
                                            class="datepicker-default form-control" id="datepicker"
                                            value="20 August 2021" required>
                                        <div class="icon"><i class="far fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <div class="input-group pass-group">
                                        <input placeholder="Password" value="123456" id="password" type="password"
                                            class="form-control pass-input" required>
                                        <span class="input-group-text pass-handle">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="confirm_password">Confirm Password</label>
                                    <div class="input-group pass-group">
                                        <input placeholder="Confirm Password" value="123456" id="confirm_password"
                                            type="password" class="form-control pass-input" required>
                                        <span class="input-group-text pass-handle">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Mobile_Number">Mobile Number</label>
                                    <input id="Mobile_Number" type="tel" maxlength="10" name="phoneNumber"
                                        class="form-control" value="+91 123 456 7890" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <select class="form-control">
                                        <option value="Gender">Gender</option>
                                        <option value="Male" selected>Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Designation">Designation</label>
                                    <input id="Designation" type="text" class="form-control"
                                        value="Senior Manager" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Department</label>
                                    <select class="form-control">
                                        <option value="Department">Department</option>
                                        <option value="html">HTML</option>
                                        <option value="css">CSS</option>
                                        <option value="javascript" selected>JavaScript</option>
                                        <option value="angular">Angular</option>
                                        <option value="angular">React</option>
                                        <option value="vuejs">Vue.js</option>
                                        <option value="ruby">Ruby</option>
                                        <option value="php">PHP</option>
                                        <option value="asp">ASP.NET</option>
                                        <option value="python">Python</option>
                                        <option value="mysql">MySQL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="datepicker1">Date of Birth</label>
                                    <div class="input-hasicon mb-xl-0 mb-3">
                                        <input name="datepicker" class="datepicker-default form-control"
                                            id="datepicker1" value="20 August 2021" required>
                                        <div class="icon"><i class="far fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Education">Education</label>
                                    <input id="Education" type="text" class="form-control"
                                        value="M.COM, B.COM, B.A" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group fallback w-100">
                                    <input type="file" class="form-control" data-default-file="" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-danger light">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    jQuery('#addStaffForm').submit(function(e) {
        if (jQuery(this).find('#password').val() !== jQuery(this).find('#confirm_password').val()) {
            e.preventDefault();
            jQuery(this).find('#confirm_password').addClass('is-invalid');
        }
    })
</script>
@endpush