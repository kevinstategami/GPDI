<!doctype html>
<html lang="en">

<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="{{url('dashboard')}}"><img src="{{asset('admin/assets/img/logo-dark.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">												
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('admin/assets/img/user.png')}}	" class="img-circle" alt="Avatar"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li>
									<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="lnr lnr-exit"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
							<a href="#homepage" data-toggle="collapse" class="collapsed"><i class="lnr lnr-home"></i> <span>Homepage</span><i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="homepage" class="collapse ">
								<ul class="nav">
									<li><a href="{{url('dashboard/slideshow')}}" class="">Slideshow</a></li>
									<li><a href="{{url('dashboard/footer')}}" class="">Footer</a></li>									
								</ul>
							</div>
						</li>						
						<li>
							<a href="#Wadah" data-toggle="collapse" class="collapsed"><i class="fa fa-address-book"></i> <span>Wadah</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="Wadah" class="collapse ">
								<ul class="nav">
									<li><a href="{{url('dashboard/wadah')}}" class="">Kepanitiaan</a></li>
									<li><a href="{{url('dashboard/event')}}" class="">Event</a></li>									
									<li><a href="{{url('dashboard/gallery')}}" class="">Gallery</a></li>									
								</ul>
							</div>
						</li>						
						<li><a href="{{url('dashboard/jadwal')}}" class=""><i class="fa fa-calendar"></i> <span>Jadwal Ibadah</span></a></li>							
						<li>
							<a href="#infoRohani" data-toggle="collapse" class="collapsed"><i class="fa fa-info"></i> <span>Info Rohani</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="infoRohani" class="collapse ">
								<ul class="nav">
									<li><a href="{{url('dashboard/ringkasan')}}" class="">Ringkasan Khotbah</a></li>
									<li><a href="{{url('dashboard/artikel')}}" class="">Artikel Rohani</a></li>									
								</ul>
							</div>
						</li>						
						<li>
							<a href="#interaktif" data-toggle="collapse" class="collapsed"><i class="fa fa-home"></i> <span>Interaktif</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="interaktif" class="collapse ">
								<ul class="nav">
									<li><a href="{{url('dashboard/customer')}}" class="">Biodata Jemaat</a></li>
									<li><a href="{{url('dashboard/permohonandoa')}}" class="">Permohonan Doa</a></li>
									<li><a href="{{url('dashboard/keselamatan')}}" class="">Keselamatan</a></li>									
									<li><a href="{{url('dashboard/pengakuan')}}" class="">Pengakuan Iman</a></li>									
								</ul>
							</div>
						</li>												
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->		

	 	<div class="main">
	 		@yield('admin')
	 	</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
	<script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});

	//form article
        $("input").addClass("text-capitalize");
        $("button[type='reset']").click(function(){
          $(this).siblings(".row").find(".custom-file").children(".custom-file-label").text('Cover Article');
          $(this).siblings(".row").find("img").attr("src", "");
          $("textarea").next().find("html body").children().remove();
          _.defer(function () {
              // it._controls.wysiwyg.setData(bodyText); // by the direct reference
              CKEDITOR.instances.ckeditor.setData(''); // or this way like in the example
          });
        });

        CKEDITOR.replace('ckeditor');
        CKEDITOR.replace('isi');
	</script>
</body>

</html>
