
@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <p class="mb-0">Your business dashboard template</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;">#</th>
                                    <th>Customer Name</th>
                                    <th>Customer Care</th>
                                    <th>Date</th>
                                    <th>Age</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>01</strong></td>
                                    <td>Mr. Bobby</td>
                                    <td>Jackson</td>
                                    <td>01 August 2023</td>
                                    <td>45</td>
                                    <td>$21.56</td>
                                </tr>
                                <tr>
                                    <td><strong>02</strong></td>
                                    <td>Mr. sunny</td>
                                    <td>Jack</td>
                                    <td>15 July 2023</td>
                                    <td>24</td>
                                    <td>$45.56</td>
                                </tr>
                                <tr>
                                    <td><strong>03</strong></td>
                                    <td>Mr. Bobby</td>
                                    <td>Jackson</td>
                                    <td>04 November 2023</td>
                                    <td>34</td>
                                    <td>$78.45</td>
                                </tr>
                                <tr>
                                    <td><strong>04</strong></td>
                                    <td>Mr. jack</td>
                                    <td>Bobby</td>
                                    <td>24 September 2023</td>
                                    <td>52</td>
                                    <td>$154.01</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Border Style</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border-dashed table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th class="text-end">Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="javascript:void(0)">Order #26589</a>
                                    </td>
                                    <td>Herman Beck</td>
                                    <td><span class="text-muted">Oct 16, 2017</span>
                                    </td>
                                    <td>$45.00</td>
                                    <td class="text-end">EN</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">Order #58746</a>
                                    </td>
                                    <td>Mary Adams</td>
                                    <td><span class="text-muted">Oct 12, 2017</span>
                                    </td>
                                    <td>$245.30</td>
                                    <td class="text-end">CN</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">Order #98458</a>
                                    </td>
                                    <td>Caleb Richards</td>
                                    <td><span class="text-muted">May 18, 2017</span>
                                    </td>
                                    <td>$38.00</td>
                                    <td class="text-end">AU</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">Order #32658</a>
                                    </td>
                                    <td>June Lane</td>
                                    <td><span class="text-muted">Apr 28, 2017</span>
                                    </td>
                                    <td>$77.99</td>
                                    <td class="text-end">FR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Payments Queue</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;">#</th>
                                    <th>Customer Name</th>
                                    <th>Customer Care</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>01</strong></td>
                                    <td>Mr. Bobby</td>
                                    <td>Jackson</td>
                                    <td>01 August 2020</td>
                                    <td><span class="badge light badge-success">Successful</span></td>
                                    <td>$21.56</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp"
                                                data-bs-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" cx="5" cy="12" r="2" />
                                                        <circle fill="#000000" cx="12" cy="12" r="2" />
                                                        <circle fill="#000000" cx="19" cy="12" r="2" />
                                                    </g>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>02</strong></td>
                                    <td>Mr. sunny</td>
                                    <td>jack</td>
                                    <td>01 August 2020</td>
                                    <td><span class="badge light badge-danger">Canceled</span></td>
                                    <td>$21.56</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-danger light sharp"
                                                data-bs-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" cx="5" cy="12" r="2" />
                                                        <circle fill="#000000" cx="12" cy="12" r="2" />
                                                        <circle fill="#000000" cx="19" cy="12" r="2" />
                                                    </g>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>03</strong></td>
                                    <td>Mr. jack</td>
                                    <td>Bobby</td>
                                    <td>01 August 2023</td>
                                    <td><span class="badge light badge-warning">Pending</span></td>
                                    <td>$21.56</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-warning light sharp"
                                                data-bs-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                    version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" cx="5" cy="12" r="2" />
                                                        <circle fill="#000000" cx="12" cy="12" r="2" />
                                                        <circle fill="#000000" cx="19" cy="12" r="2" />
                                                    </g>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">CRM</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:50px;">
                                        <div class="form-check custom-checkbox checkbox-primary">
                                            <input type="checkbox" class="form-check-input" id="checkAll"
                                                required="">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th>Roll No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox checkbox-primary">
                                            <input type="checkbox" class="form-check-input" id="customCheckBox2"
                                                required="">
                                            <label class="form-check-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    <td><strong>542</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center"><img src="{{ asset('images/avatar/1.jpg') }}"
                                                class="rounded-lg me-2" width="24" alt=""> <span
                                                class="w-space-no">Jackson</span></div>
                                    </td>
                                    <td>hello@example.com </td>
                                    <td>01 August 2020</td>
                                    <td>
                                        <div class="d-flex align-items-center"><i
                                                class="fa fa-circle text-success me-1"></i> Successful</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);"
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox checkbox-primary">
                                            <input type="checkbox" class="form-check-input" id="customCheckBox3"
                                                required="">
                                            <label class="form-check-label" for="customCheckBox3"></label>
                                        </div>
                                    </td>
                                    <td><strong>543</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center"><img src="{{ asset('images/avatar/2.jpg') }}"
                                                class="rounded-lg me-2" width="24" alt=""> <span
                                                class="w-space-no">Sunny</span></div>
                                    </td>
                                    <td>example@example.com </td>
                                    <td>01 August 2022</td>
                                    <td>
                                        <div class="d-flex align-items-center"><i
                                                class="fa fa-circle text-danger me-1"></i> Canceled</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);"
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox checkbox-primary">
                                            <input type="checkbox" class="form-check-input" id="customCheckBox4"
                                                required="">
                                            <label class="form-check-label" for="customCheckBox4"></label>
                                        </div>
                                    </td>
                                    <td><strong>544</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center"><img src="{{ asset('images/avatar/3.jpg') }}"
                                                class="rounded-lg me-2" width="24" alt=""> <span
                                                class="w-space-no">Bobby</span></div>
                                    </td>
                                    <td>hello@example.com </td>
                                    <td>01 August 2023</td>
                                    <td>
                                        <div class="d-flex align-items-center"><i
                                                class="fa fa-circle text-warning me-1"></i> Pending</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="javascript:void(0);"
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);"
                                                class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Color T-Shirt For Man</td>
                                    <td><span class="badge badge-primary">Sale</span>
                                    </td>
                                    <td>January 22</td>
                                    <td class="color-primary">$21.56</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Color T-Shirt For Women</td>
                                    <td><span class="badge badge-success">Tax</span>
                                    </td>
                                    <td>January 30</td>
                                    <td class="color-success">$55.32</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Blue Backpack For Baby</td>
                                    <td><span class="badge badge-danger">Extended</span>
                                    </td>
                                    <td>January 25</td>
                                    <td class="color-danger">$14.85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Striped</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Color T-Shirt For Man</td>
                                    <td><span class="badge badge-primary">Sale</span>
                                    </td>
                                    <td>January 22</td>
                                    <td class="color-primary">$21.56</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Color T-Shirt For Women</td>
                                    <td><span class="badge badge-success">Tax</span>
                                    </td>
                                    <td>January 30</td>
                                    <td class="color-success">$55.32</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Blue Backpack For Baby</td>
                                    <td><span class="badge badge-danger">Extended</span>
                                    </td>
                                    <td>January 25</td>
                                    <td class="color-danger">$14.85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Bordered</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Color T-Shirt For Man</td>
                                    <td><span class="badge badge-primary">Sale</span>
                                    </td>
                                    <td>January 22</td>
                                    <td class="color-primary">$21.56</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Color T-Shirt For Women</td>
                                    <td><span class="badge badge-success">Tax</span>
                                    </td>
                                    <td>January 30</td>
                                    <td class="color-success">$55.32</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Blue Backpack For Baby</td>
                                    <td><span class="badge badge-danger">Extended</span>
                                    </td>
                                    <td>January 25</td>
                                    <td class="color-danger">$14.85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Hover</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Color T-Shirt For Man</td>
                                    <td><span class="badge badge-primary light">Sale</span>
                                    </td>
                                    <td>January 22</td>
                                    <td class="color-primary">$21.56</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Color T-Shirt For Women</td>
                                    <td><span class="badge badge-success light">Tax</span>
                                    </td>
                                    <td>January 30</td>
                                    <td class="color-success">$55.32</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Blue Backpack For Baby</td>
                                    <td><span class="badge badge-danger light">Extended</span>
                                    </td>
                                    <td>January 25</td>
                                    <td class="color-danger">$14.85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bordered Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Task</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Label</th>
                                    <th scope="col" class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Air Conditioner</td>
                                    <td>
                                        <div class="progress" style="background: rgba(127, 99, 244, .1)">
                                            <div class="progress-bar bg-primary" style="width: 70%;"
                                                role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Apr 20,2018</td>
                                    <td><span class="badge badge-primary light">70%</span>
                                    </td>
                                    <td class="text-end">
                                        <span>
                                            <a href="javascript:void()" class="me-4" data-bs-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a>
                                            <a href="javascript:void()" data-bs-toggle="tooltip" data-placement="top"
                                                title="Close"><i class="fas fa-times color-danger"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Textiles</td>
                                    <td>
                                        <div class="progress" style="background: rgba(76, 175, 80, .1)">
                                            <div class="progress-bar bg-success" style="width: 70%;"
                                                role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>May 27,2018</td>
                                    <td><span class="badge badge-success">70%</span>
                                    </td>
                                    <td class="text-end">
                                        <span>
                                            <a href="javascript:void()" class="me-4" data-bs-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a>
                                            <a href="javascript:void()" data-bs-toggle="tooltip" data-placement="top"
                                                title="Close"><i class="fas fa-times color-danger"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Milk Powder</td>
                                    <td>
                                        <div class="progress" style="background: rgba(70, 74, 83, .1)">
                                            <div class="progress-bar bg-dark" style="width: 70%;" role="progressbar">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>May 18,2018</td>
                                    <td><span class="badge badge-dark light">70%</span>
                                    </td>
                                    <td class="text-end">
                                        <span>
                                            <a href="javascript:void()" class="me-4" data-bs-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a>
                                            <a href="javascript:void()" data-bs-toggle="tooltip" data-placement="top"
                                                title="Close"><i class="fas fa-times color-danger"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vehicles</td>
                                    <td>
                                        <div class="progress" style="background: rgba(255, 87, 34, .1)">
                                            <div class="progress-bar bg-danger" style="width: 70%;"
                                                role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Mar 27,2018</td>
                                    <td><span class="badge badge-danger">70%</span>
                                    </td>
                                    <td class="text-end">
                                        <span>
                                            <a href="javascript:void()" class="me-4" data-bs-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a>
                                            <a href="javascript:void()" data-bs-toggle="tooltip" data-placement="top"
                                                title="Close"><i class="fas fa-times color-danger"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Boats</td>
                                    <td>
                                        <div class="progress" style="background: rgba(255, 193, 7, .1)">
                                            <div class="progress-bar bg-warning" style="width: 70%;"
                                                role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jun 28,2018</td>
                                    <td><span class="badge badge-warning">70%</span>
                                    </td>
                                    <td class="text-end">
                                        <span>
                                            <a href="javascript:void()" class="me-4" data-bs-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a>
                                            <a href="javascript:void()" data-bs-toggle="tooltip" data-placement="top"
                                                title="Close"><i class="fas fa-times color-danger"></i></a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Stripped</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Task</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Label</th>
                                    <th scope="col" class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Air Conditioner</td>
                                    <td>
                                        <div class="progress" style="background: rgba(127, 99, 244, .1)">
                                            <div class="progress-bar bg-primary" style="width: 70%;"
                                                role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Apr 20,2018</td>
                                    <td><span class="badge badge-primary">70%</span>
                                    </td>
                                    <td class="text-end"><span><a href="javascript:void()" class="me-4"
                                                data-bs-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a><a
                                                href="javascript:void()" data-bs-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fas fa-times color-danger"></i></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Textiles</td>
                                    <td>
                                        <div class="progress" style="background: rgba(76, 175, 80, .1)">
                                            <div class="progress-bar bg-success" style="width: 70%;"
                                                role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>May 27,2018</td>
                                    <td><span class="badge badge-success">70%</span>
                                    </td>
                                    <td class="text-end"><span><a href="javascript:void()" class="me-4"
                                                data-bs-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a><a
                                                href="javascript:void()" data-bs-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fas fa-times color-danger"></i></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Milk Powder</td>
                                    <td>
                                        <div class="progress" style="background: rgba(70, 74, 83, .1)">
                                            <div class="progress-bar bg-dark" style="width: 70%;" role="progressbar">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>May 18,2018</td>
                                    <td><span class="badge badge-dark">70%</span>
                                    </td>
                                    <td class="text-end"><span><a href="javascript:void()" class="me-4"
                                                data-bs-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a><a
                                                href="javascript:void()" data-bs-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fas fa-times color-danger"></i></a></span>
                                    </td>
                                <tr>
                                    <td>Boats</td>
                                    <td>
                                        <div class="progress" style="background: rgba(255, 193, 7, .1)">
                                            <div class="progress-bar bg-warning" style="width: 70%;"
                                                role="progressbar"><span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jun 28,2018</td>
                                    <td><span class="badge badge-warning">70%</span>
                                    </td>
                                    <td class="text-end"><span><a href="javascript:void()" class="me-4"
                                                data-bs-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a><a
                                                href="javascript:void()" data-bs-toggle="tooltip"
                                                data-placement="top" title="Close"><i
                                                    class="fas fa-times color-danger"></i></a></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Responsive Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th class="text-end">Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="javascript:void(0)">Order #26589</a>
                                    </td>
                                    <td>Herman Beck</td>
                                    <td><span class="text-muted">Oct 16, 2017</span>
                                    </td>
                                    <td>$45.00</td>
                                    <td><span class="badge badge-success">Paid</span>
                                    </td>
                                    <td class="text-end">EN</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">Order #58746</a>
                                    </td>
                                    <td>Mary Adams</td>
                                    <td><span class="text-muted">Oct 12, 2017</span>
                                    </td>
                                    <td>$245.30</td>
                                    <td><span class="badge badge-info light">Shipped</span>
                                    </td>
                                    <td class="text-end">CN</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">Order #98458</a>
                                    </td>
                                    <td>Caleb Richards</td>
                                    <td><span class="text-muted">May 18, 2017</span>
                                    </td>
                                    <td>$38.00</td>
                                    <td><span class="badge badge-danger">Shipped</span>
                                    </td>
                                    <td class="text-end">AU</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">Order #32658</a>
                                    </td>
                                    <td>June Lane</td>
                                    <td><span class="text-muted">Apr 28, 2017</span>
                                    </td>
                                    <td>$77.99</td>
                                    <td><span class="badge badge-success">Paid</span>
                                    </td>
                                    <td class="text-end">FR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Heading With Background</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-info">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Primary Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table primary-table-bordered">
                            <thead class="thead-primary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Primary Table Hover</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table primary-table-bg-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <th>6</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Contextual Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border" style="min-width: 500px;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Column heading</th>
                                    <th>Column heading</th>
                                    <th>Column heading</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                    <td>1</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-primary">
                                    <td>2</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-success">
                                    <td>3</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-info">
                                    <td>4</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-warning">
                                    <td>5</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-danger">
                                    <td>6</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection