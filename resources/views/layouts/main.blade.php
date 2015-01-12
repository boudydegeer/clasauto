<html>
	<head>
		<title>Clasauto</title>

		<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/css/vendor/font-awesome.css"/>
		<link rel="stylesheet" href="{{ elixir('css/app.css') }}"/>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	</head>
	<body>
		<div class="container">
			@include('layouts.header')
			@yield('content')
			@include('layouts.footer')
		</div>

		<script src="/js/vendor/jquery.min.js"></script>
		<script src="/js/vendor/bootstrap.min.js"></script>
	</body>
</html>
