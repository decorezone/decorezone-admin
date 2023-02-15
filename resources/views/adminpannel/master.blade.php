@include('adminpannel.chunks.header')

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		@include('adminpannel.chunks.main_header')
		@include('adminpannel.chunks.main_sidebar')
		<div class="content-wrapper">
			@yield('adminpagedash')
		</div>

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.4.0
			</div>
			<strong>Copyright &copy; 2019 <a href="#">BlogAdmin</a>.</strong> All rights
			reserved.
		</footer>
	</div>
	@include('adminpannel.chunks.footer')

	