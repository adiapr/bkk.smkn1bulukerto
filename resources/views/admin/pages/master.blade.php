<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.pages.headset')
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			@include('admin.pages.logo')
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			@include('admin.pages.topbar')
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		@include('admin.pages.sidebar')
		{{-- End Sidebar --}}
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">@yield('page-title')</h4>
						<ul class="breadcrumbs">
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">@yield('arrow1')</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">@yield('page-title')</a>
							</li>
						</ul>
					</div>
					@yield('content')
				</div>
			</div>
			<footer class="footer">
				@include('admin.pages.footer')
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->
	@include('admin.pages.jscript')
</body>
</html>
