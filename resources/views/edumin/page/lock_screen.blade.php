@extends('layouts.fullwidth')
@section('content')
<div class="col-lg-5 col-md-6">
    <div class="card mb-0 h-auto">
        <div class="card-body">
            <div class="text-center mb-2">
                <a href="{{ url('index') }}">
                    <svg width="250" height="56" viewBox="0 0 220 56" fill="none" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="M79.6333 24.3V27.175H85.2583V30.9H79.6333V34.075H86.0083V38H74.7333V20.375H86.0083V24.3H79.6333ZM100.19 20.375C102.04 20.375 103.656 20.75 105.04 21.5C106.44 22.2333 107.515 23.2667 108.265 24.6C109.015 25.9333 109.39 27.4583 109.39 29.175C109.39 30.875 109.006 32.3917 108.24 33.725C107.49 35.0583 106.415 36.1083 105.015 36.875C103.631 37.625 102.023 38 100.19 38H93.2147V20.375H100.19ZM99.8147 33.675C101.248 33.675 102.373 33.2833 103.19 32.5C104.006 31.7167 104.415 30.6083 104.415 29.175C104.415 27.725 104.006 26.6083 103.19 25.825C102.373 25.025 101.248 24.625 99.8147 24.625H98.1147V33.675H99.8147ZM121.184 20.375V30.6C121.184 31.55 121.4 32.2833 121.834 32.8C122.284 33.3167 122.959 33.575 123.859 33.575C124.759 33.575 125.434 33.3167 125.884 32.8C126.35 32.2667 126.584 31.5333 126.584 30.6V20.375H131.484V30.6C131.484 32.2167 131.142 33.6 130.459 34.75C129.775 35.8833 128.842 36.7417 127.659 37.325C126.492 37.8917 125.192 38.175 123.759 38.175C122.325 38.175 121.042 37.8917 119.909 37.325C118.792 36.7417 117.909 35.8833 117.259 34.75C116.625 33.6167 116.309 32.2333 116.309 30.6V20.375H121.184ZM159.542 20.375V38H154.642V28.275L151.317 38H147.217L143.867 28.2V38H138.967V20.375H144.892L149.317 31.825L153.642 20.375H159.542ZM172.016 20.375V38H167.116V20.375H172.016ZM195.917 38H191.017L184.492 28.15V38H179.592V20.375H184.492L191.017 30.35V20.375H195.917V38Z"
                            fill="black" />
                        <mask id="mask0_131_20" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="64" height="56">
                            <rect width="63.871" height="55.8871" fill="url(#pattern0)" />
                        </mask>
                        <g mask="url(#mask0_131_20)">
                            <rect x="0.798584" width="63.0726" height="55.8871" fill="var(--primary)" />
                        </g>
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                height="1">
                                <use xlink:href="#image0_131_20" transform="scale(0.0125 0.0142857)" />
                            </pattern>
                            <image id="image0_131_20" width="80" height="70"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABGCAMAAABsQOMZAAAAllBMVEUAAAD/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxZ2RtyAAAAAMXRSTlMA61rOUwajmEgztPfHuqiLdj0gGhXw38SukX5pVi0lC4VhQjgD2b+fck4pD/nm0uIIbztwLQAAAiBJREFUWMPt19uSojAUheEoKigKqIACKqh4PnSv93+5YUprU0wwEMjFdFX/936SWIYd9tuPba5bG4XcTL8DGKwVcZvTHa+WewXcUAfyrF1b7oR/Wu7acEuUNJk25KYjfGhhNOB2xJWSK0nuwnEc2ZXgjCNqpK3qPt0YNTtsa3ArDRL5UQW31SDZ4Zx+5qInGuQ7canW3x7QsI7j8lzko0Ve6BY554GWeXZOxuEXFOQF89dhHHagKNO+MraC0hw2cw7quEeyZlndpxrOj/rsXW+sAuwV/sJHVSB1aUFOdGR1BcegVFqPrQnkXiPSjS9/d4xAjrQkF2u8ftUc5MlBfW6UcRzIN7RqcjvGxCB1FT8lDTqVYD/OBy4xZw3ZuzQWgZo1o6HL/sydiLsFB1e05C8guNJT2mYpp69pDk08IBWBWvEDrs2dlXd9Q1+YmAA6/SqwMKzekgJpBjPibGRVgvym3xwiTXtOO6wD9UBqOSXy/Hi92YhbDwAJkB9Wv88PM3S5sVYWpL9WVkzcfgDIg9TxTRK3BErALbKiKpCOJ2o6AUrB4SBrXwUS+V6LQRwHUmIwJ7fZNhHXBqQWxLUFqf8E9CDftwgMTWlPT5koN/Gl1hvQYabiJuCfYwX3PGrRk7nYBlWbeZK95M5DX7B19pXJl0bjcu7pxKxhxqjlVZlvE9wLnLVnbZs7dIvxkitTURotkPU835iyjEl2yv72U/sDJjPTtw93ZiUAAAAASUVORK5CYII=" />
                        </defs>
                    </svg>
                </a>
            </div>
            <h4 class="text-center mb-4">Account Locked</h4>
            <form action="{{ url('index') }}">
                <div class="mb-4 position-relative">
                    <label class="form-label" for="dlabPassword">Password</label>
                    <input type="password" id="dlabPassword" class="form-control" value="123456">
                    <span class="show-pass eye">
                        <i class="fa fa-eye-slash"></i>
                        <i class="fa fa-eye"></i>
                    </span>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Unlock</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
