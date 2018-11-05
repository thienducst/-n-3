<!doctype html>
<html class="fixed">
<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>@yield('title')</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- CSS -->
	@include('admin.layouts.css')

	@yield('css')
	@include('admin.layouts.js')
	@yield('js')

</head>
<body>
	<section class="body">

		<!-- start: header -->
		@include('admin.layouts.header')
		<!-- end: header -->

		<div class="inner-wrapper">
			<!-- start: sidebar -->
			@include('admin.layouts.left-aside')
			<!-- end: sidebar -->

			<section role="main" class="content-body">
				<header class="page-header">
					<h2>@yield('titlePage')</h2>

					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="index.html">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>Pages</span></li>
							<li><span>Blank Page</span></li>
						</ol>

						<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
					</div>
				</header>
				<div class="row">
				<div class="col-lg-12">
					<div style="margin-bottom: 10px">@yield('button')</div>
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="fa fa-caret-down"></a>
								<a href="#" class="fa fa-times"></a>
							</div>
							<h2 class="panel-title">@yield('title')</h2>
						</header>
						<div class="panel-body">
							@yield('content')
						</div>
					</section>
				</div>
			</div>
				

			</section>
		</div>
	</section>
	<!-- js -->

</body>
</html>