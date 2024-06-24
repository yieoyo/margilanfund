@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Fees Receipt</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="javascript:void(0);">Fees</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Fees Receipt</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-3">

            <div class="card mt-3">
                <div class="card-header"> Invoice <strong>01/12/2023</strong> <span class="float-right">
                        <strong>Status:</strong> Pending</span> </div>
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="mt-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <h6>From:</h6>
                            <div> <strong>Webz Poland</strong> </div>
                            <div>Madalinskiego 8</div>
                            <div>#8901 Marmora Road Chi Minh City</div>
                            <div>Email: info@example.com</div>
                            <div>Phone: +01 123 456 7890</div>
                        </div>
                        <div class="mt-4 col-xl-6 text-right col-lg-6 col-md-6 col-sm-12">
                            <h6>To:</h6>
                            <div> <strong>Bob Mart</strong> </div>
                            <div>Attn: Daniel Marek</div>
                            <div>#8901 Marmora Road Chi Minh City</div>
                            <div>Email: info@example.com</div>
                            <div>Phone: +02 987 654 3210</div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>Fees Type</th>
                                    <th>Frequency</th>
                                    <th class="right">Invoice number</th>
                                    <th class="center">Date</th>
                                    <th class="right">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="center">1</td>
                                    <td class="left strong">Annual Fees</td>
                                    <td class="left">Monthly</td>
                                    <td class="right">#54620</td>
                                    <td class="center">8 August 2021</td>
                                    <td class="right">$999,00</td>
                                </tr>
                                <tr>
                                    <td class="center">2</td>
                                    <td class="left">Annual Fees</td>
                                    <td class="left">Yearly</td>
                                    <td class="right">#54310</td>
                                    <td class="center">7 August 2021</td>
                                    <td class="right">$3.000,00</td>
                                </tr>
                                <tr>
                                    <td class="center">3</td>
                                    <td class="left">Tuition Fees</td>
                                    <td class="left">Monthly</td>
                                    <td class="right">#24315</td>
                                    <td class="center">6 August 2021</td>
                                    <td class="right">$499,00</td>
                                </tr>
                                <tr>
                                    <td class="center">4</td>
                                    <td class="left">Tuition Fees</td>
                                    <td class="left">Yearly</td>
                                    <td class="right">#32541</td>
                                    <td class="center">5 August 2021</td>
                                    <td class="right">$3.999,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"> </div>
                        <div class="col-lg-4 col-sm-5 ms-auto">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left"><strong>Subtotal</strong></td>
                                        <td class="right">$8.497,00</td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>Discount (20%)</strong></td>
                                        <td class="right">$1,699,40</td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>VAT (10%)</strong></td>
                                        <td class="right">$679,76</td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>Total</strong></td>
                                        <td class="right"><strong>$7.477,36</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-primary" type="submit"> Proceed to payment </button>
                            <button onclick="javascript:window.print();" class="btn btn-light" type="button"> <i
                                    class="fa fa-print"></i> Print </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection