@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>All Staff</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="javascript:void(0);">Staff</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">All Staff</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills mb-3">
                <li class="nav-item"><a href="#list-view" data-bs-toggle="tab" class="nav-link me-1 show active">List
                        View</a></li>
                <li class="nav-item"><a href="#grid-view" data-bs-toggle="tab" class="nav-link">Grid View</a></li>
            </ul>
        </div>
        <div class="col-lg-12">
            <div class="row tab-content">
                <div id="list-view" class="tab-pane fade active show col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Staff </h4>
                            <a href="{{ url('add-staff') }}" class="btn btn-primary">+ Add new</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example5" class="display text-nowrap" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Profile</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Joining Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic1.jpg') }}" alt=""></td>
                                            <td>Tiger Nixon</td>
                                            <td>Clerk</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>#8901 Demo Road </td>
                                            <td>2011/04/25</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic2.jpg') }}" alt=""></td>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>#8901 Demo Road </td>
                                            <td>2011/07/25</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic3.jpg') }}" alt=""></td>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>#8901 Demo Road </td>
                                            <td>2009/01/12</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic4.jpg') }}" alt=""></td>
                                            <td>Cedric Kelly</td>
                                            <td>Developer</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>#8901 Demo Road </td>
                                            <td>2012/03/29</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic5.jpg') }}" alt=""></td>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                            <td>#8901 Demo Road </td>
                                            <td>2008/11/28</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic6.jpg') }}" alt=""></td>
                                            <td>Brielle Williamson</td>
                                            <td>Specialist</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2012/12/02</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic7.jpg') }}" alt=""></td>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2012/08/06</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic8.jpg') }}" alt=""></td>
                                            <td>Rhona Davidson</td>
                                            <td>Librarian</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2010/10/14</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic9.jpg') }}" alt=""></td>
                                            <td>Colleen Hurst</td>
                                            <td>Librarian</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2009/09/15</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic10.jpg') }}" alt=""></td>
                                            <td>Sonya Frost</td>
                                            <td>Librarian</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2008/12/13</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic1.jpg') }}" alt=""></td>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2008/12/19</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic2.jpg') }}" alt=""></td>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2013/03/03</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic3.jpg') }}" alt=""></td>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2008/10/16</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic4.jpg') }}" alt=""></td>
                                            <td>Haley Kennedy</td>
                                            <td>Librarian</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2012/12/18</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic5.jpg') }}" alt=""></td>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2010/03/17</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic6.jpg') }}" alt=""></td>
                                            <td>Michael Silva</td>
                                            <td>Librarian</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2012/11/27</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic7.jpg') }}" alt=""></td>
                                            <td>Paul Byrd</td>
                                            <td>Financial Officer</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2010/06/09</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic8.jpg') }}" alt=""></td>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2009/04/10</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic9.jpg') }}" alt=""></td>
                                            <td>Bradley Greer</td>
                                            <td>Librarian</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2012/10/13</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic10.jpg') }}" alt=""></td>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2012/09/26</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic1.jpg') }}" alt=""></td>
                                            <td>Jenette Caldwell</td>
                                            <td>Receptionist</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2011/09/03</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic2.jpg') }}" alt=""></td>
                                            <td>Yuri Berry</td>
                                            <td>Receptionist</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2009/06/25</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic3.jpg') }}" alt=""></td>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2011/12/12</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic4.jpg') }}" alt=""></td>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2010/09/20</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic5.jpg') }}" alt=""></td>
                                            <td>Angelica Ramos</td>
                                            <td>Executive Officer</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2009/10/09</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic6.jpg') }}" alt=""></td>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2010/12/22</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic7.jpg') }}" alt=""></td>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2010/11/14</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic8.jpg') }}" alt=""></td>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2011/06/07</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic9.jpg') }}" alt=""></td>
                                            <td>Fiona Green</td>
                                            <td>Receptionist</td>
                                            <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2010/03/11</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="{{ asset('images/profile/small/pic10.jpg') }}" alt=""></td>
                                            <td>Shou Itou</td>
                                            <td>Receptionist</td>
                                            <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a>
                                            </td>
                                            <td>#8901 Demo Road </td>
                                            <td>2011/08/14</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="grid-view" class="tab-pane fade col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card card-profile">
                                <div class="card-header justify-content-end pb-0 border-0">
                                    <div class="dropdown">
                                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown">
                                            <span class="dropdown-dots fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                            <div class="py-2">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="{{ asset('images/profile/small/pic2.jpg') }}" width="100"
                                                class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <h3 class="mt-4 mb-1">Alexander</h3>
                                        <p class="text-muted">M.COM., P.H.D.</p>
                                        <ul class="list-group mb-3 list-group-flush">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Gender :</span><strong>Male</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Phone No. :</span><strong>+01 123 456
                                                    7890</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Email:</span><strong>info@example.com</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong>
                                            </li>
                                        </ul>
                                        <a class="btn btn-outline-primary btn-rounded mt-3 px-4"
                                            href="{{ url('professor-profile') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card card-profile">
                                <div class="card-header justify-content-end pb-0 border-0">
                                    <div class="dropdown">
                                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown">
                                            <span class="dropdown-dots fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                            <div class="py-2">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="{{ asset('images/profile/small/pic3.jpg') }}" width="100"
                                                class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <h3 class="mt-4 mb-1">Elizabeth</h3>
                                        <p class="text-muted">B.COM., M.COM.</p>
                                        <ul class="list-group mb-3 list-group-flush">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Gender :</span><strong>Female</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Phone No. :</span><strong>+01 123 456
                                                    7890</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Email:</span><strong>info@example.com</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong>
                                            </li>
                                        </ul>
                                        <a class="btn btn-outline-primary btn-rounded mt-3 px-4"
                                            href="{{ url('professor-profile') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card card-profile">
                                <div class="card-header justify-content-end pb-0 border-0">
                                    <div class="dropdown">
                                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown">
                                            <span class="dropdown-dots fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                            <div class="py-2">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="{{ asset('images/profile/small/pic4.jpg') }}" width="100"
                                                class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <h3 class="mt-4 mb-1">Amelia</h3>
                                        <p class="text-muted">M.COM., P.H.D.</p>
                                        <ul class="list-group mb-3 list-group-flush">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Gender :</span><strong>Female</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Phone No. :</span><strong>+01 123 456
                                                    7890</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Email:</span><strong>info@example.com</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong>
                                            </li>
                                        </ul>
                                        <a class="btn btn-outline-primary btn-rounded mt-3 px-4"
                                            href="{{ url('professor-profile') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card card-profile">
                                <div class="card-header justify-content-end pb-0 border-0">
                                    <div class="dropdown">
                                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown">
                                            <span class="dropdown-dots fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                            <div class="py-2">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="{{ asset('images/profile/small/pic5.jpg') }}" width="100"
                                                class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <h3 class="mt-4 mb-1">Charlotte</h3>
                                        <p class="text-muted">B.COM., M.COM.</p>
                                        <ul class="list-group mb-3 list-group-flush">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Gender :</span><strong>Female</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Phone No. :</span><strong>+01 123 456
                                                    7890</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Email:</span><strong>info@example.com</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong>
                                            </li>
                                        </ul>
                                        <a class="btn btn-outline-primary btn-rounded mt-3 px-4"
                                            href="{{ url('professor-profile') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card card-profile">
                                <div class="card-header justify-content-end pb-0 border-0">
                                    <div class="dropdown">
                                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown">
                                            <span class="dropdown-dots fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                            <div class="py-2">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="{{ asset('images/profile/small/pic6.jpg') }}" width="100"
                                                class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <h3 class="mt-4 mb-1">Isabella</h3>
                                        <p class="text-muted">B.A, B.C.A</p>
                                        <ul class="list-group mb-3 list-group-flush">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Gender :</span><strong>Female</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Phone No. :</span><strong>+01 123 456
                                                    7890</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Email:</span><strong>info@example.com</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong>
                                            </li>
                                        </ul>
                                        <a class="btn btn-outline-primary btn-rounded mt-3 px-4"
                                            href="{{ url('professor-profile') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card card-profile">
                                <div class="card-header justify-content-end pb-0 border-0">
                                    <div class="dropdown">
                                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown">
                                            <span class="dropdown-dots fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                            <div class="py-2">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="{{ asset('images/profile/small/pic7.jpg') }}" width="100"
                                                class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <h3 class="mt-4 mb-1">Sebastian</h3>
                                        <p class="text-muted">M.COM., P.H.D.</p>
                                        <ul class="list-group mb-3 list-group-flush">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Gender :</span><strong>Male</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Phone No. :</span><strong>+01 123 456
                                                    7890</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Email:</span><strong>info@example.com</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong>
                                            </li>
                                        </ul>
                                        <a class="btn btn-outline-primary btn-rounded mt-3 px-4"
                                            href="{{ url('professor-profile') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card card-profile">
                                <div class="card-header justify-content-end pb-0 border-0">
                                    <div class="dropdown">
                                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown">
                                            <span class="dropdown-dots fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                            <div class="py-2">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="{{ asset('images/profile/small/pic8.jpg') }}" width="100"
                                                class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <h3 class="mt-4 mb-1">Olivia</h3>
                                        <p class="text-muted">B.COM., M.COM.</p>
                                        <ul class="list-group mb-3 list-group-flush">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Gender :</span><strong>Female</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Phone No. :</span><strong>+01 123 456
                                                    7890</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Email:</span><strong>info@example.com</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong>
                                            </li>
                                        </ul>
                                        <a class="btn btn-outline-primary btn-rounded mt-3 px-4"
                                            href="{{ url('professor-profile') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card card-profile">
                                <div class="card-header justify-content-end pb-0 border-0">
                                    <div class="dropdown">
                                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown">
                                            <span class="dropdown-dots fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                            <div class="py-2">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="{{ asset('images/profile/small/pic9.jpg') }}" width="100"
                                                class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <h3 class="mt-4 mb-1">Emma</h3>
                                        <p class="text-muted">B.A, B.C.A</p>
                                        <ul class="list-group mb-3 list-group-flush">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Gender :</span><strong>Female</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Phone No. :</span><strong>+01 123 456
                                                    7890</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Email:</span><strong>info@example.com</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong>
                                            </li>
                                        </ul>
                                        <a class="btn btn-outline-primary btn-rounded mt-3 px-4"
                                            href="{{ url('professor-profile') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card card-profile">
                                <div class="card-header justify-content-end pb-0 border-0">
                                    <div class="dropdown">
                                        <button class="btn btn-link" type="button" data-bs-toggle="dropdown">
                                            <span class="dropdown-dots fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                            <div class="py-2">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="{{ asset('images/profile/small/pic10.jpg') }}" width="100"
                                                class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <h3 class="mt-4 mb-1">Jackson</h3>
                                        <p class="text-muted">M.COM., P.H.D.</p>
                                        <ul class="list-group mb-3 list-group-flush">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Gender :</span><strong>Male</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Phone No. :</span><strong>+01 123 456
                                                    7890</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Email:</span><strong>info@example.com</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong>
                                            </li>
                                        </ul>
                                        <a class="btn btn-outline-primary btn-rounded mt-3 px-4"
                                            href="{{ url('professor-profile') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection