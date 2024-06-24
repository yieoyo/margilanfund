@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>All Library</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">All Library</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Asset List</h4>
                    <a href="{{ url('add-library') }}" class="btn btn-primary">+ Add new</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Title</th>
                                    <th>Subject</th>
                                    <th>Department</th>
                                    <th>Year</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>01</strong></td>
                                    <td>Technical Author</td>
                                    <td>Designing</td>
                                    <td>Architecture</td>
                                    <td>3 Year</td>
                                    <td>Book</td>
                                    <td>Out of Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>02</strong></td>
                                    <td>Team Leader</td>
                                    <td>Computer</td>
                                    <td>Office Manager</td>
                                    <td>2 Year</td>
                                    <td>Comics</td>
                                    <td>Out of Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>03</strong></td>
                                    <td>Software Engineer</td>
                                    <td>Computer</td>
                                    <td>Architecture</td>
                                    <td>1 Year</td>
                                    <td>Book</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>04</strong></td>
                                    <td>Software Engineer</td>
                                    <td>Designing</td>
                                    <td>Data Entry</td>
                                    <td>3 Year</td>
                                    <td>Newspaper</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>05</strong></td>
                                    <td>Marketing Designer</td>
                                    <td>Politics</td>
                                    <td>Office Manager</td>
                                    <td>1 Year</td>
                                    <td>Book</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>06</strong></td>
                                    <td>Office Manager</td>
                                    <td>Computer</td>
                                    <td>Data Entry</td>
                                    <td>1 Year</td>
                                    <td>Newspaper</td>
                                    <td>Out of Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>07</strong></td>
                                    <td>Regional Marketing</td>
                                    <td>Science</td>
                                    <td>Architecture</td>
                                    <td>2 Year</td>
                                    <td>Comics</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>08</strong></td>
                                    <td>Integration Specialist</td>
                                    <td>Designing</td>
                                    <td>Office Manager</td>
                                    <td>3 Year</td>
                                    <td>Newspaper</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>09</strong></td>
                                    <td>Integration Specialist</td>
                                    <td>Politics</td>
                                    <td>Data Entry</td>
                                    <td>1 Year</td>
                                    <td>Book</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>10</strong></td>
                                    <td>Networking</td>
                                    <td>B.COM., M.COM.</td>
                                    <td>Security Department</td>
                                    <td>1 Year</td>
                                    <td>Newspaper</td>
                                    <td>Out of Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>11</strong></td>
                                    <td>Javascript Developer</td>
                                    <td>Computer</td>
                                    <td>Architecture</td>
                                    <td>2 Year</td>
                                    <td>Newspaper</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>12</strong></td>
                                    <td>Javascript Developer</td>
                                    <td>Science</td>
                                    <td>Security Department</td>
                                    <td>3 Year</td>
                                    <td>Comics</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>13</strong></td>
                                    <td>Javascript Developer</td>
                                    <td>Designing</td>
                                    <td>Office Manager</td>
                                    <td>1 Year</td>
                                    <td>Book</td>
                                    <td>Out of Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>14</strong></td>
                                    <td>Javascript Developer</td>
                                    <td>Computer</td>
                                    <td>Architecture</td>
                                    <td>1 Year</td>
                                    <td>Comics</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>15</strong></td>
                                    <td>Javascript Developer</td>
                                    <td>Politics</td>
                                    <td>Data Entry</td>
                                    <td>2 Year</td>
                                    <td>Newspaper</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>16</strong></td>
                                    <td>Systems Administrator</td>
                                    <td>Science</td>
                                    <td>Security Department</td>
                                    <td>1 Year</td>
                                    <td>Newspaper</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>17</strong></td>
                                    <td>Systems Administrator</td>
                                    <td>Politics</td>
                                    <td>Office Manager</td>
                                    <td>3 Year</td>
                                    <td>Book</td>
                                    <td>Out of Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>18</strong></td>
                                    <td>Systems Administrator</td>
                                    <td>Designing</td>
                                    <td>Security Department</td>
                                    <td>2 Year</td>
                                    <td>Comics</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>19</strong></td>
                                    <td>Systems Administrator</td>
                                    <td>Computer</td>
                                    <td>Data Entry</td>
                                    <td>1 Year</td>
                                    <td>Comics</td>
                                    <td>In Stock</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>20</strong></td>
                                    <td>Systems Administrator</td>
                                    <td>Computer</td>
                                    <td>Office Manager</td>
                                    <td>2 Year</td>
                                    <td>Book</td>
                                    <td>In Stock</td>
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