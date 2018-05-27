<!DOCTYPE html>
<html>
<head>
	<title>洄瀾生活 - @yield('title')</title>
	@include('partials.head')
</head>
<body>
	@include('partials.nav')
	@section('content')
	@show
</body>
@include('partials.footer')
</html>