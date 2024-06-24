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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Shop</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Invoice</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="card mt-3">
                <div class="card-header"> Invoice <strong>09/10/2023</strong> <span class="float-right">
                        <strong>Status:</strong> Pending</span> </div>
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <h6>From:</h6>
                            <div> <strong>Webz Poland</strong> </div>
                            <div>Madalinskiego 8</div>
                            <div>71-101 Szczecin, Poland</div>
                            <div>Email: info@webz.com.pl</div>
                            <div>Phone: +48 444 666 3333</div>
                        </div>
                        <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <h6>To:</h6>
                            <div> <strong>Bob Mart</strong> </div>
                            <div>Attn: Daniel Marek</div>
                            <div>43-190 Mikolow, Poland</div>
                            <div>Email: marek@daniel.com</div>
                            <div>Phone: +48 123 456 789</div>
                        </div>
                        <div
                            class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-start justify-content-xs-start">
                            <div class="row align-items-center">
                                <div class="col-sm-9">
                                    <div class="brand-logo justify-content-start p-0 mb-3">
                                        <svg class="logo-abbr me-2" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="67"
                                            viewBox="0 0 84 67" fill="none">
                                            <mask id="mask0_135_5" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                                x="4" y="0" width="76" height="66">
                                                <rect x="4" width="76" height="66" fill="url(#pattern0)" />
                                            </mask>
                                            <g mask="url(#mask0_135_5)">
                                                <rect x="-3" y="-1" width="90" height="68"
                                                    fill="var(--primary)" />
                                            </g>
                                            <defs>
                                                <pattern id="pattern0" patternContentUnits="objectBoundingBox"
                                                    width="1" height="1">
                                                    <use xlink:href="#image0_135_5"
                                                        transform="matrix(0.0125 0 0 0.0143939 0 -0.00378788)" />
                                                </pattern>
                                                <image id="image0_135_5" width="80" height="70"
                                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABGCAMAAABsQOMZAAAAllBMVEUAAAD/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxZ2RtyAAAAAMXRSTlMA61rOUwajmEgztPfHuqiLdj0gGhXw38SukX5pVi0lC4VhQjgD2b+fck4pD/nm0uIIbztwLQAAAiBJREFUWMPt19uSojAUheEoKigKqIACKqh4PnSv93+5YUprU0wwEMjFdFX/936SWIYd9tuPba5bG4XcTL8DGKwVcZvTHa+WewXcUAfyrF1b7oR/Wu7acEuUNJk25KYjfGhhNOB2xJWSK0nuwnEc2ZXgjCNqpK3qPt0YNTtsa3ArDRL5UQW31SDZ4Zx+5qInGuQ7canW3x7QsI7j8lzko0Ve6BY554GWeXZOxuEXFOQF89dhHHagKNO+MraC0hw2cw7quEeyZlndpxrOj/rsXW+sAuwV/sJHVSB1aUFOdGR1BcegVFqPrQnkXiPSjS9/d4xAjrQkF2u8ftUc5MlBfW6UcRzIN7RqcjvGxCB1FT8lDTqVYD/OBy4xZw3ZuzQWgZo1o6HL/sydiLsFB1e05C8guNJT2mYpp69pDk08IBWBWvEDrs2dlXd9Q1+YmAA6/SqwMKzekgJpBjPibGRVgvym3xwiTXtOO6wD9UBqOSXy/Hi92YhbDwAJkB9Wv88PM3S5sVYWpL9WVkzcfgDIg9TxTRK3BErALbKiKpCOJ2o6AUrB4SBrXwUS+V6LQRwHUmIwJ7fZNhHXBqQWxLUFqf8E9CDftwgMTWlPT5koN/Gl1hvQYabiJuCfYwX3PGrRk7nYBlWbeZK95M5DX7B19pXJl0bjcu7pxKxhxqjlVZlvE9wLnLVnbZs7dIvxkitTURotkPU835iyjEl2yv72U/sDJjPTtw93ZiUAAAAASUVORK5CYII=" />
                                            </defs>
                                        </svg>
                                        <img class="logo-compact w-50" src="{{ asset('images/logo-text.png') }}" alt="/">
                                    </div>
                                    <span>Please send exact amount: <strong class="d-block">0.15050000 BTC</strong>
                                        <strong>1DonateWffyhwAjskoEwXt83pHZxhLTr8H</strong></span><br>
                                    <small class="text-muted">Current exchange rate 1BTC = $6590 USD</small>
                                </div>
                                <div class="col-sm-3 mt-3"> <img src="{{ asset('images/qr.png') }}" class="img-fluid width110"
                                        alt="/"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>Item</th>
                                    <th>Description</th>
                                    <th class="right">Unit Cost</th>
                                    <th class="center">Qty</th>
                                    <th class="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="center">1</td>
                                    <td class="left strong">Origin License</td>
                                    <td class="left">Extended License</td>
                                    <td class="right">$999,00</td>
                                    <td class="center">1</td>
                                    <td class="right">$999,00</td>
                                </tr>
                                <tr>
                                    <td class="center">2</td>
                                    <td class="left">Custom Services</td>
                                    <td class="left">Instalation and Customization (cost per hour)</td>
                                    <td class="right">$150,00</td>
                                    <td class="center">20</td>
                                    <td class="right">$3.000,00</td>
                                </tr>
                                <tr>
                                    <td class="center">3</td>
                                    <td class="left">Hosting</td>
                                    <td class="left">1 year subcription</td>
                                    <td class="right">$499,00</td>
                                    <td class="center">1</td>
                                    <td class="right">$499,00</td>
                                </tr>
                                <tr>
                                    <td class="center">4</td>
                                    <td class="left">Platinum Support</td>
                                    <td class="left">1 year subcription 24/7</td>
                                    <td class="right">$3.999,00</td>
                                    <td class="center">1</td>
                                    <td class="right">$3.999,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"> </div>
                        <div class="col-lg-4 col-sm-5 ms-auto">
                            <table class="table table-clear text-center">
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
                                        <td class="right"><strong>$7.477,36</strong><br>
                                            <strong>0.15050000 BTC</strong>
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
</div>
@endsection