



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laravel Ecommerce Project</title>

@include('partials.styles')
</head>
<body>


<div class="wrapper">

@include('partials.nav')



@yield('content')



@include('partials.footer')


</div>
	
@include('partials.scripts')

	</body>
</html>