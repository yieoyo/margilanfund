
@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Add Course</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="javascript:void(0);">Courses</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Course</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Courses Details</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Course_Name">Course Name</label>
                                    <input placeholder="Course Name" id="Course_Name" type="text"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Course_Code">Course Code</label>
                                    <input placeholder="Course Code" id="Course_Code" type="text"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label" for="Course_Details">Course Details</label>
                                    <textarea placeholder="Course Details" id="Course_Details" class="form-control" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="datepicker">Start Form</label>
                                    <div class="input-hasicon mb-xl-0 mb-3">
                                        <input placeholder="Start Form" name="datepicker"
                                            class="datepicker-default form-control" id="datepicker" required>
                                        <div class="icon"><i class="far fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Course_Duration">Course Duration</label>
                                    <input placeholder="Course Duration" id="Course_Duration" type="text"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Course_Price">Course Price</label>
                                    <input placeholder="Course Price" id="Course_Price" type="text"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Professor_Name">Professor Name</label>
                                    <input placeholder="Professor Name" id="Professor_Name" type="text"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Maximum_Students">Maximum Students</label>
                                    <input placeholder="Maximum Students" id="Maximum_Students" type="text"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Contact_Number">Contact Number</label>
                                    <input placeholder="Contact Number" id="Contact_Number" type="number"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group fallback w-100">
                                    <label class="form-label d-block" for="Course_Photo">Course Photo</label>
                                    <input id="Course_Photo" type="file" class="form-control" data-default-file=""
                                        required>
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
