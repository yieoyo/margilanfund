@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Add Library Assets</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Library</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Library Assets</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Title">Title</label>
                                    <input placeholder="Title" id="Title" type="text" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Subject</label>
                                    <select class="form-control">
                                        <option value="Subject">Subject</option>
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
                                    <label class="form-label" for="Auther_Name">Auther Name</label>
                                    <input placeholder="Auther Name" id="Auther_Name" type="text"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Publisher">Publisher</label>
                                    <input placeholder="Publisher" id="Publisher" type="text" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Department</label>
                                    <select class="form-control">
                                        <option value="Department">Department</option>
                                        <option value="Computer">Computer</option>
                                        <option value="DataEntry">Data Entry</option>
                                        <option value="Management">Management</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Asset type</label>
                                    <select class="form-control">
                                        <option value="Asset type">Asset type</option>
                                        <option value="Computer">Book</option>
                                        <option value="DataEntry">Newspaper</option>
                                        <option value="Management">Comics</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="datepicker">Purchase Date</label>
                                    <div class="input-hasicon mb-xl-0 mb-3">
                                        <input placeholder="Purchase Date" name="datepicker"
                                            class="datepicker-default form-control" id="datepicker" required>
                                        <div class="icon"><i class="far fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Price">Price</label>
                                    <input placeholder="Price" id="Price" type="text" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select class="form-control">
                                        <option value="Status">Status</option>
                                        <option value="Computer">In Stock</option>
                                        <option value="DataEntry">Out Of Stock</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label" for="Assets_Details">Assets Details</label>
                                    <textarea placeholder="Assets Details" id="Assets_Details" class="form-control" rows="5" required></textarea>
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