@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Add Student</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="javascript:void(0);">Students</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Student</a></li>
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
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Enter_First_Name">First Name</label>
                                    <input id="Enter_First_Name" placeholder="Enter First Name" type="text"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Enter_Last_Name">Last Name</label>
                                    <input id="Enter_Last_Name" placeholder="Enter Last Name" type="text"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Email">Email</label>
                                    <input id="Email" placeholder="Email" type="email" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="datepicker">Registration Date</label>
                                    <div class="input-hasicon mb-xl-0 mb-3">
                                        <input placeholder="Registration Date" name="datepicker"
                                            class="datepicker-default form-control" id="datepicker" required>
                                        <div class="icon"><i class="far fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Roll_No">Roll No.</label>
                                    <input id="Roll_No" placeholder="Roll No" type="text" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Class</label>
                                    <select class="form-control">
                                        <option value="Class">Class</option>
                                        <option value="html">HTML</option>
                                        <option value="css">CSS</option>
                                        <option value="javascript">JavaScript</option>
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
                                    <label class="form-label">Gender</label>
                                    <select class="form-control">
                                        <option value="Gender">Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Mobile_Number">Mobile Number</label>
                                    <input id="Mobile_Number" placeholder="Mobile Number" type="number" maxlength="10"
                                        name="phoneNumber" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Parents_Name">Parents Name</label>
                                    <input id="Parents_Name" placeholder="Parents Name" type="text"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Parents_Mobile_Number">Parents Mobile
                                        Number</label>
                                    <input id="Parents_Mobile_Number" placeholder="Parents Mobile Number"
                                        type="number" maxlength="10" name="phoneNumber" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="datepicker1">Date of Birth</label>
                                    <div class="input-hasicon mb-xl-0 mb-3">
                                        <input placeholder="Date of Birth" name="datepicker"
                                            class="datepicker-default form-control" id="datepicker1" required>
                                        <div class="icon"><i class="far fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Blood_Group">Blood Group</label>
                                    <input id="Blood_Group" placeholder="Blood Group" type="text"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label" for="Address">Address</label>
                                    <textarea id="Address" placeholder="Address" class="form-control" rows="5" required></textarea>
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
