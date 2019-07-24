<!DOCTYPE html>
<html>
@include('layouts.head')
<body>
	{{-- HEADER --}}
@include('layouts.header')
<div class="container">
		{{-- SECTION --}}
	@yield('section')
</div>
	{{-- FOOTER --}}
@include('layouts.footer')
</body>
</html>