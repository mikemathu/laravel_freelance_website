<!DOCTYPE html>
<html>
	<head>
		<title>{{config('app.name', 'My-Laravel-Project')}}</title>
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
		
		
		<style>
			body{padding-top: 3%;margin: 0;}
			.header1{background-color: #EEEEEE;padding-left: 1%;}
			.header2{padding:20px 40px 20px 40px;color:#fff;}
			.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
		</style>
	<body>
		<div>
			@include('inc.artisan-navbar')
				@yield('content')
			@include('inc.footer')
		</div>
	</body>
</html>