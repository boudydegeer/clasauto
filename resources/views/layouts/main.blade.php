<html>
	<head>
		<title>Clasauto</title>

		<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/css/vendor/flag-icons-css/css/flag-icon.min.css"/>
		<link rel="stylesheet" href="/css/vendor/font-awesome/font-awesome.css"/>
		<link rel="stylesheet" href="{{ elixir('css/app.css') }}"/>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	</head>
	<body>
			@include('layouts.header')
			@if(in_array(Route::currentRouteName(), ['home','cars.index'] ))
				@include("cars._featured-carousel")
			@endif
		<div class="container">
			<div class="content">
				@yield('content')
			</div>
			@include('layouts.footer')
		</div>

		<script src="/js/vendor/jquery.min.js"></script>
		<script src="/js/vendor/bootstrap.min.js"></script>
		<script>
    $('#single-item-carousel').carousel({
        interval: 4000
    });

    // handles the carousel thumbnails
    $('[id^=carousel-selector-]').click( function(){

      var id_selector = $(this).attr("id");
      console.log(id_selector + " clicked")
      var id = id_selector.substr(id_selector.length -1);
      id = parseInt(id);
      $('#single-item-carousel').carousel(id);
      $('[id^=carousel-selector-]').removeClass('selected');
      $(this).addClass('selected');
    });

    // when the carousel slides, auto update
    $('#single-item-carousel').on('slid', function (e) {
      var id = $('.item.active').data('slide-number');
      id = parseInt(id);
      $('[id^=carousel-selector-]').removeClass('selected');
      $('[id=carousel-selector-'+id+']').addClass('selected');
    });
    </script>
	</body>
</html>
