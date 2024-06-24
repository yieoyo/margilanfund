@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>All Holiday</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="javascript:void(0);">Holiday</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">All Holiday</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Holiday List</h4>
                    <a href="{{ url('add-holiday') }}" class="btn btn-primary">+ Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example5" class="display text-nowrap">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Start date</th>
                                    <th>End Date</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Festival</td>
                                    <td>National Holiday</td>
                                    <td>31 July 1998</td>
                                    <td>12 August 2021</td>
                                    <td>Lorem Ipsum is simply dummy</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Republic Day</td>
                                    <td>Office Holiday</td>
                                    <td>23 August 2005</td>
                                    <td>25 May 2019</td>
                                    <td>When an unknown printer took</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Festival</td>
                                    <td>National Holiday</td>
                                    <td>15 March 2001</td>
                                    <td>28 May 2021</td>
                                    <td>Aldus Page Maker including versions</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>Republic Day</td>
                                    <td>Office Holiday</td>
                                    <td>31 July 1998</td>
                                    <td>12 August 2021</td>
                                    <td>Lorem Ipsum is simply dummy</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>Festival</td>
                                    <td>National Holiday</td>
                                    <td>15 March 2001</td>
                                    <td>28 May 2021</td>
                                    <td>When an unknown printer took</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td>Republic Day</td>
                                    <td>Office Holiday</td>
                                    <td>31 July 1998</td>
                                    <td>12 August 2021</td>
                                    <td>Aldus Page Maker including versions</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>07</td>
                                    <td>Festival</td>
                                    <td>Public Holiday</td>
                                    <td>23 August 2005</td>
                                    <td>25 May 2019</td>
                                    <td>Lorem Ipsum is simply dummy</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>08</td>
                                    <td>Memorial Day</td>
                                    <td>National Holiday</td>
                                    <td>15 March 2001</td>
                                    <td>28 May 2021</td>
                                    <td>When an unknown printer took</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>09</td>
                                    <td>Republic Day</td>
                                    <td>National Holiday</td>
                                    <td>31 July 1998</td>
                                    <td>12 August 2021</td>
                                    <td>Aldus Page Maker including versions</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Independence Day</td>
                                    <td>Office Holiday</td>
                                    <td>23 August 2005</td>
                                    <td>25 May 2019</td>
                                    <td>When an unknown printer took</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Memorial Day</td>
                                    <td>Public Holiday</td>
                                    <td>15 March 2001</td>
                                    <td>28 May 2021</td>
                                    <td>Lorem Ipsum is simply dummy</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Independence Day</td>
                                    <td>Office Holiday</td>
                                    <td>31 July 1998</td>
                                    <td>12 August 2021</td>
                                    <td>Aldus Page Maker including versions</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Festival</td>
                                    <td>National Holiday</td>
                                    <td>23 August 2005</td>
                                    <td>25 May 2019</td>
                                    <td>Aldus Page Maker including versions</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Independence Day</td>
                                    <td>Public Holiday</td>
                                    <td>15 March 2001</td>
                                    <td>28 May 2021</td>
                                    <td>When an unknown printer took</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Memorial Day</td>
                                    <td>National Holiday</td>
                                    <td>31 July 1998</td>
                                    <td>12 August 2021</td>
                                    <td>Lorem Ipsum is simply dummy</td>
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
    </div>
</div>
@endsection