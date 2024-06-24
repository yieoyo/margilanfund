@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>All Departments</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="javascript:void(0);">Departments</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">All Departments</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Department List</h4>
                    <a href="{{ url('add-departments') }}" class="btn btn-primary"> + Add List</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example5" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Department</th>
                                    <th>Head Of Dept.</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Starting Year</th>
                                    <th>Stu. Capacity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Clerk</td>
                                    <td>Rhona Davidson</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2015</td>
                                    <td>210</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Accountant</td>
                                    <td>Michael Silva</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2017 </td>
                                    <td>10</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Junior Technical</td>
                                    <td>Ashton Cox</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2016 </td>
                                    <td>20</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>Developer</td>
                                    <td>Cedric Kelly</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2015 </td>
                                    <td>30</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>Accountant</td>
                                    <td>Airi Satou</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2017</td>
                                    <td>40</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td>Specialist</td>
                                    <td>Brielle Williamson</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2016 </td>
                                    <td>50</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>07</td>
                                    <td>Sales Assistant</td>
                                    <td>Herrod Chandler</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2015</td>
                                    <td>60</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>08</td>
                                    <td>Librarian</td>
                                    <td>Rhona Davidson</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2017</td>
                                    <td>70</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>09</td>
                                    <td>Librarian</td>
                                    <td>Colleen Hurst</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2017</td>
                                    <td>80</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Librarian</td>
                                    <td>Sonya Frost</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2015</td>
                                    <td>90</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Office Manager</td>
                                    <td>Jena Gaines</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2016</td>
                                    <td>110</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Support Lead</td>
                                    <td>Quinn Flynn</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2015</td>
                                    <td>120</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Regional Director</td>
                                    <td>Charde Marshall</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2017</td>
                                    <td>130</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Librarian</td>
                                    <td>Haley Kennedy</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2016</td>
                                    <td>140</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Region al Director</td>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2017 </td>
                                    <td>150</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Librarian</td>
                                    <td>Michael Silva</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2015</td>
                                    <td>160</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Financial Officer</td>
                                    <td>Paul Byrd</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2016</td>
                                    <td>170</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Systems Administrator</td>
                                    <td>Gloria Little</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2017</td>
                                    <td>180</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Librarian</td>
                                    <td>Bradley Greer</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2016</td>
                                    <td>190</td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-primary"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-xs sharp btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Personnel Lead</td>
                                    <td>Dai Rios</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                    <td>2015 </td>
                                    <td>200</td>
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