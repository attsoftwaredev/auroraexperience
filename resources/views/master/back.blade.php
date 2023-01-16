<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>{{ $setting->title }}</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon"  type="image/x-icon" href="{{ asset('public/assets/images/'.$setting->favicon) }}"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('public/assets/back/js/plugin/webfont/webfont.min.js') }}"></script>
	<script id="setFont" data-src="{{ asset("public/assets/back/css/fonts.css") }}" src="{{ asset('public/assets/back/js/plugin/webfont/setfont.js') }}"></script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('public/assets/back/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/back/css/azzara.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/back/css/tagify.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/back/css/editor.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/back/css/bootstrap-iconpicker.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/back/css/magnific-popup.css') }}">

	<!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/back/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/back/css/custom-admin.css') }}">
    


    @if(DB::table('languages')->where('type', 'Dashboard')->where('is_default',1)->first()->rtl == 1)
    <link rel="stylesheet" href="{{ asset('public/assets/back/css/rtl.css') }}">
    @endif

    @yield('styles')


<style>
@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400&display=swap');

.main-header .logo-header {
    width: 270px;
    min-height: 60px;
}
.main-header .logo-header .logo .navbar-brand {
    margin-top: 10px;
}
.navbar-minimize i {
    color: #6c5ffc;
    margin-top: 14px;
    margin-right: -15px;
    font-size: 25px;
}
a.viewWebBtn {
    background: #6c5ffc;
    font-family: 'IBM Plex Sans', sans-serif;
    font-size:16px;
}
.main-header .navbar-header {
    min-height: 60px;
}
.iconPurple {
    color: #6c5ffc;
    font-size: 18px !important;
}
span.badge.badge-danger.badge-counter {
    padding: 2px 2px;
    height: 12px;
    width: 12px;
    font-size: 8px;
}
.toggle-fullscreen-btn {
	z-index: 10000;
	top: 10px;
	right: 10px;
	border: 0;
	padding: 0;
	background: none;
	cursor: pointer;
	outline: none;
}


.toggle-fullscreen-svg {
    display: block;
    height: 20px;
    margin-top: 8px;
}

.toggle-fullscreen-svg path {
	transform-box: view-box;
	transform-origin: 12px 12px;
	fill: none;
	stroke: #6c5ffc;
	stroke-width: 1;
	transition: .15s;
}


.toggle-fullscreen-btn:hover path:nth-child(1),
.toggle-fullscreen-btn:focus path:nth-child(1) {
	transform: translate(-2px, -2px);
}

.toggle-fullscreen-btn:hover path:nth-child(2),
.toggle-fullscreen-btn:focus path:nth-child(2) {
	transform: translate(2px, -2px);
}

.toggle-fullscreen-btn:hover path:nth-child(3),
.toggle-fullscreen-btn:focus path:nth-child(3) {
	transform: translate(2px, 2px);
}

.toggle-fullscreen-btn:hover path:nth-child(4),
.toggle-fullscreen-btn:focus path:nth-child(4) {
	transform: translate(-2px, 2px);
}


.toggle-fullscreen-btn:not(.on) .icon-fullscreen-enter {
	display: none;
}

.toggle-fullscreen-btn.on .icon-fullscreen-leave {
	display: none;
}
</style>
</head>

<body>
	<div class="wrapper">
		<div class="main-header " >
			<!-- Logo Header -->
			<div class="logo-header">

				<a href="{{route('back.dashboard')}}" class="logo">
					<img src="{{asset('public/assets/images/'.$setting->dark_logo)}}" alt="navbar brand" class="navbar-brand">
				</a> 
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize ">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
					    <li class="nav-item mr-4">
					      <button class="js-toggle-fullscreen-btn toggle-fullscreen-btn" aria-label="Enter fullscreen mode" hidden>
	<svg class="toggle-fullscreen-svg" width="28" height="28" viewBox="-2 -2 28 28">
	    	<g class="icon-fullscreen-leave">
			<path d="M 24 17 h -7 v 7" />
			<path d="M 0 17 h 7 v 7" />
			<path d="M 0 7 h 7 v -7" />
			<path d="M 24 7 h -7 v -7" />
		</g>
		<g class="icon-fullscreen-enter">
			<path d="M 2 9 v -7 h 7" />
			<path d="M 22 9 v -7 h -7" />
			<path d="M 22 15 v 7 h -7" />
			<path d="M 2 15 v 7 h 7" />
		</g>
		
	</svg>
</button>
					    </li>     
						<li class="nav-item mr-4">
							<a class="btn btn-sm viewWebBtn py-1 text-white" title="website" href="{{route('front.index')}}" target="_blank">
							{{ __('View Website') }}
							</a>
						</li>
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-bell iconPurple" aria-hidden="true"></i>
                            <!-- Counter - Alerts -->
                            <span  class="badge badge-danger badge-counter">{{ App\Models\Notification::countRegistration() + App\Models\Notification::countOrder() }}</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown" id="display-notf" data-href={{ route('back.notifications') }}>
                                @include('back.notification.index')
                            </div>
                        </li>

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="{{route('back.dashboard')}}" aria-expanded="false">
								<div class="avatar-sm avatar avatar-sm">
									<img src="{{ Auth::guard('admin')->user()->photo ? asset('public/assets/images/'.Auth::guard('admin')->user()->photo) : asset('public/assets/images/noimage.png') }}" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<li>
									<div class="user-box">
										<div class="avatar-lg"><img src="{{ Auth::guard('admin')->user()->photo ? asset('public/assets/images/'.Auth::guard('admin')->user()->photo) : asset('public/assets/images/noimage.png') }}" alt="image profile" class="avatar-img rounded"></div>

										<div class="u-text">
											<h4>{{ Auth::guard('admin')->user()->name }}</h4>
											<p class="text-muted">{{ Auth::guard('admin')->user()->email }}</p><a href="{{ route('back.profile') }}" class="btn  btn-secondary btn-sm">{{ __('Update Profile') }}</a>
										</div>
									</div>
								</li>
								<li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ route('back.profile') }}">{{ __('Update Profile') }}</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ route('back.password') }}">{{ __('Change Password') }}</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ route('back.logout') }}">{{ __('Logout') }}</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar">

			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ Auth::guard('admin')->user()->photo ? asset('public/assets/images/'.Auth::guard('admin')->user()->photo) : asset('public/assets/images/noimage.png') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{ Auth::guard('admin')->user()->name }}
									<span class="user-level">
									    @if (Auth::guard('admin')->user()->role_id == 1)
									    {{ __('Super Admin') }}
									    @elseif (Auth::guard('admin')->user()->role_id == 3)
									    {{ __('Creator') }}
									    @else
                    					{{ __('Admin') }}
                    					@endif
									    </span>
								</span>
							</a>
						</div>
					</div>

					@if (Auth::guard('admin')->user()->role_id == 1)
					@include('master.inc.super')
					@elseif (Auth::guard('admin')->user()->role_id == 3)
					@include('master.inc.creator')
					@else
					@include('master.inc.normal')
					@endif

                    <!----<div class="sidebar-footer text-primary d-block text-center pt-3">
                        <span class="d-inline-block"><b>Version 4.7</b></span>
                    </div>--->

				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
                    @yield('content')
				</div>
			</div>
        </div>

    </div>
    @php
        $mainbs = [];
        $mainbs['is_announcement'] = $setting->is_announcement;
        $mainbs['announcement_delay'] = $setting->announcement_delay;
        $mainbs['overlay'] = $setting->overlay;
        $mainbs = json_encode($mainbs);
    @endphp

<script>
    var mainbs = {!! $mainbs !!};
</script>
	<!--   Core JS Files   -->
	<script src="{{ asset('public/assets/back/js/core/jquery.3.6.0.min.js') }}"></script>
	<script src="{{ asset('public/assets/back/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('public/assets/back/js/core/bootstrap.min.js') }}"></script>

	<!-- jQuery UI -->
	<script src="{{ asset('public/assets/back/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('public/assets/back/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ asset('public/assets/back/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

	<!-- Moment JS -->
	<script src="{{ asset('public/assets/back/js/plugin/moment/moment.min.js') }}"></script>

	<!-- Datatables -->
	<script src="{{ asset('public/assets/back/js/plugin/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('public/assets/back/js/plugin/datatables/dataTables.bootstrap4.min.js') }}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{ asset('public/assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>


	<!-- Bootstrap Notify -->
	<script src="{{ asset('public/assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

	<!-- Chartjs -->
	<script src="{{ asset('public/assets/back/js/plugin/chart.min.js') }}"></script>

	<!-- Editor -->
	<script src="{{ asset('public/assets/back/js/plugin/editor.js') }}"></script>
    <script src="{{ asset('public/assets/back/js/plugin/datepicker/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- Tagify -->
    <script src="{{ asset('public/assets/back/js/tagify.js') }}"></script>

    <!-- JS Color -->
    <script src="{{ asset('public/assets/back/js/jscolor.js') }}"></script>

    <!-- Magnific Popup -->
    <script src="{{ asset('public/assets/back/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- Sortable -->
    <script src="{{ asset('public/assets/back/js/sortable.js') }}"></script>

    <!-- Icon Picker -->
    <script src="{{ asset('public/assets/back/js/bootstrap-iconpicker.bundle.min.js') }}"></script>

	<!-- Azzara JS -->
    <script src="{{ asset('public/assets/back/js/ready.min.js') }}"></script>

	<!-- Custom JS -->

    @yield('scripts')
	<script src="{{ asset('public/assets/back/js/custom.js') }}"></script>
    <script>
    
if(document.fullscreenEnabled || document.webkitFullscreenEnabled) {
	const toggleBtn = document.querySelector('.js-toggle-fullscreen-btn');

	const styleEl = document.createElement('link');
	styleEl.setAttribute('rel', 'stylesheet');
	styleEl.setAttribute('href', 'https://codepen.io/tiggr/pen/poJoLyW.css');
	styleEl.addEventListener('load', function() {
		toggleBtn.hidden = false;
	});
	document.head.appendChild(styleEl);
	
	toggleBtn.addEventListener('click', function() {
		if(document.fullscreen) {
			document.exitFullscreen();
		} else if(document.webkitFullscreenElement) {
			document.webkitCancelFullScreen()
		} else if(document.documentElement.requestFullscreen) {
			document.documentElement.requestFullscreen();
		} else {
			document.documentElement.webkitRequestFullScreen();
		}
	});
	
	document.addEventListener('fullscreenchange', handleFullscreen);
	document.addEventListener('webkitfullscreenchange', handleFullscreen);
	
	
	function handleFullscreen() {
		if(document.fullscreen || document.webkitFullscreenElement) {
			toggleBtn.classList.add('on');
			toggleBtn.setAttribute('aria-label', 'Exit fullscreen mode');
		} else {
			toggleBtn.classList.remove('on');
			toggleBtn.setAttribute('aria-label', 'Enter fullscreen mode');
		}
	}
}
</script>
</body>
</html>
