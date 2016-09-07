<!DOCTYPE html>
<html>
	<head>
		<title>Stageverslag</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
    <body>
    	<input type="checkbox" id="menu-trigger" class="menu-trigger">
		<label for="menu-trigger" class="menu-icon"></label>
    	<ul class="menu">
			<li class="menu-item"><a href="/" class="btn">home</a></li>
			<li class="menu-item"><a href="/overzicht" class="btn">weekverslagen</a></li>
			<li class="menu-item"><a href="/waarbenik" class="btn">waar ben ik</a></li>
		</ul>

    	<div class="wrapper">

		@include('partials/header')

		@yield('content')

		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
		@yield('footer')
		</div>
		@include('partials/footer')
    </body>
</html>
