@php
    $controller = DzHelper::controller();
    $page = $action = DzHelper::action();
    $action = $controller.'_'.$action;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="dexignlabs">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="admin, dashboard, admin dashboard, admin template, template, admin panel, administration, analytics, bootstrap, modern, responsive, creative, retina ready, modern Dashboard responsive dashboard, responsive template, user experience, user interface, Bootstrap Dashboard, Analytics Dashboard, Customizable Admin Panel, EduMin template, ui kit, web app, EduMin, School Management,Dashboard Template, academy, course, courses, e-learning, education, learning, learning management system, lms, school, student, teacher">   
	<meta name="description" content="@yield('page_description', $page_description ?? '')">
	<meta property="og:title" content="@yield('page_description', $page_description ?? '')">
	<meta property="og:image" content="https://edumin.dexignlab.com/laravel/social-image.png">
	<meta name="format-detection" content="telephone=no">
	<meta name="twitter:title" content="@yield('page_description', $page_description ?? '')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:image" content="https://edumin.dexignlab.com/laravel/social-image.png">
	<meta name="twitter:card" content="summary_large_image">

    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png') }}">
    <title>{{ config('dz.name') }} | @yield('title', $page_title ?? '')</title>

    @if(!empty(config('dz.public.pagelevel.css.'.$action))) 
        @foreach(config('dz.public.pagelevel.css.'.$action) as $style)
            <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach
    @endif
    {{-- Global Theme Styles (used by all pages) --}}
    @if(!empty(('dz.publiconfigc.global.css'))) 
        @foreach(config('dz.public.global.css') as $style)
            <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach
    @endif
    <link class="main-css" href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
	
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ url('index') }}" class="brand-logo">
                <svg class="logo-abbr" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="67" viewBox="0 0 84 67" fill="none">
                    <mask id="mask0_135_5" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="0" width="76" height="66">
                    <rect x="4" width="76" height="66" fill="url(#pattern0)"/>
                    </mask>
                    <g mask="url(#mask0_135_5)">
                    <rect x="-3" y="-1" width="90" height="68" fill="none"/>
                    </g>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_135_5" transform="matrix(0.0125 0 0 0.0143939 0 -0.00378788)"/>
                    </pattern>
                    <image id="image0_135_5" width="80" height="70" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABGCAMAAABsQOMZAAAAllBMVEUAAAD/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxb/jxZ2RtyAAAAAMXRSTlMA61rOUwajmEgztPfHuqiLdj0gGhXw38SukX5pVi0lC4VhQjgD2b+fck4pD/nm0uIIbztwLQAAAiBJREFUWMPt19uSojAUheEoKigKqIACKqh4PnSv93+5YUprU0wwEMjFdFX/936SWIYd9tuPba5bG4XcTL8DGKwVcZvTHa+WewXcUAfyrF1b7oR/Wu7acEuUNJk25KYjfGhhNOB2xJWSK0nuwnEc2ZXgjCNqpK3qPt0YNTtsa3ArDRL5UQW31SDZ4Zx+5qInGuQ7canW3x7QsI7j8lzko0Ve6BY554GWeXZOxuEXFOQF89dhHHagKNO+MraC0hw2cw7quEeyZlndpxrOj/rsXW+sAuwV/sJHVSB1aUFOdGR1BcegVFqPrQnkXiPSjS9/d4xAjrQkF2u8ftUc5MlBfW6UcRzIN7RqcjvGxCB1FT8lDTqVYD/OBy4xZw3ZuzQWgZo1o6HL/sydiLsFB1e05C8guNJT2mYpp69pDk08IBWBWvEDrs2dlXd9Q1+YmAA6/SqwMKzekgJpBjPibGRVgvym3xwiTXtOO6wD9UBqOSXy/Hi92YhbDwAJkB9Wv88PM3S5sVYWpL9WVkzcfgDIg9TxTRK3BErALbKiKpCOJ2o6AUrB4SBrXwUS+V6LQRwHUmIwJ7fZNhHXBqQWxLUFqf8E9CDftwgMTWlPT5koN/Gl1hvQYabiJuCfYwX3PGrRk7nYBlWbeZK95M5DX7B19pXJl0bjcu7pxKxhxqjlVZlvE9wLnLVnbZs7dIvxkitTURotkPU835iyjEl2yv72U/sDJjPTtw93ZiUAAAAASUVORK5CYII="/>
                    </defs>
                </svg>
                <svg class="brand-title" xmlns="http://www.w3.org/2000/svg" width="122" height="19" viewBox="0 0 122 19" fill="none">
                    <path d="M5.3 4.3V7.175H10.925V10.9H5.3V14.075H11.675V18H0.4V0.374999H11.675V4.3H5.3ZM25.8564 0.374999C27.7064 0.374999 29.3231 0.749999 30.7064 1.5C32.1064 2.23333 33.1814 3.26667 33.9314 4.6C34.6814 5.93333 35.0564 7.45833 35.0564 9.175C35.0564 10.875 34.6731 12.3917 33.9064 13.725C33.1564 15.0583 32.0814 16.1083 30.6814 16.875C29.2981 17.625 27.6898 18 25.8564 18H18.8814V0.374999H25.8564ZM25.4814 13.675C26.9148 13.675 28.0398 13.2833 28.8564 12.5C29.6731 11.7167 30.0814 10.6083 30.0814 9.175C30.0814 7.725 29.6731 6.60833 28.8564 5.825C28.0398 5.025 26.9148 4.625 25.4814 4.625H23.7814V13.675H25.4814ZM46.8504 0.374999V10.6C46.8504 11.55 47.0671 12.2833 47.5004 12.8C47.9504 13.3167 48.6254 13.575 49.5254 13.575C50.4254 13.575 51.1004 13.3167 51.5504 12.8C52.0171 12.2667 52.2504 11.5333 52.2504 10.6V0.374999H57.1504V10.6C57.1504 12.2167 56.8087 13.6 56.1254 14.75C55.4421 15.8833 54.5087 16.7417 53.3254 17.325C52.1587 17.8917 50.8587 18.175 49.4254 18.175C47.9921 18.175 46.7087 17.8917 45.5754 17.325C44.4587 16.7417 43.5754 15.8833 42.9254 14.75C42.2921 13.6167 41.9754 12.2333 41.9754 10.6V0.374999H46.8504ZM85.2084 0.374999V18H80.3084V8.275L76.9834 18H72.8834L69.5334 8.2V18H64.6334V0.374999H70.5584L74.9834 11.825L79.3084 0.374999H85.2084ZM97.6828 0.374999V18H92.7828V0.374999H97.6828ZM121.583 18H116.683L110.158 8.15V18H105.258V0.374999H110.158L116.683 10.35V0.374999H121.583V18Z" fill="black"/>
                </svg>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
       
         <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
        @include('elements.header')
			
        
        <!--**********************************
            Sidebar start
        ***********************************-->
			@include('elements.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--****
		Wallet Sidebar
		****-->
		<!--**********************************
            Content body start
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
		@php
            $body_class = ''; 
            if($page == 'ui_button'){ $body_class = 'btn-page';} 
            if($page == 'ui_badge'){ $body_class = 'badge-demo';}
        @endphp
        <div class="content-body {{$body_class}}">
           @yield('content')
        </div>
		
        <!--**********************************
            Content body end
        ***********************************-->
       
        @stack('modal')
		<!--**********************************
			Footer start
		***********************************-->
        @if (!in_array($page,array('','','','','')))
            @include('elements.footer')
        @endif

	</div>
	<script>
        var asset_base_url = '{{ asset('/') }}';
        
    </script>
    <!--**********************************
        Main wrapper end
    ***********************************-->

<!--***********************************-->
	

		
	<!--**********************************
		Modal
	***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->
    

    @if(!empty(config('dz.public.global.js.top')))
        @foreach(config('dz.public.global.js.top') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif
    @if(!empty(config('dz.public.pagelevel.js.'.$action)))
        @foreach(config('dz.public.pagelevel.js.'.$action) as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif
    @if(!empty(config('dz.public.global.js.bottom')))
        @foreach(config('dz.public.global.js.bottom') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif
	
	@stack('scripts')
	
</body>
</html>