<!DOCTYPE html>
<html>
@include('layouts.head')
<body>
	{{-- HEADER --}}
@include('layouts.header')
<div class="col-md-1">
		{{-- ASIDE --}}
	@include('layouts.aside')
</div>
<div class="col-md-11">
		{{-- SECTION --}}
	@include('layouts.section')
</div>
<div class="col-md-12">
		{{-- FOOTER --}}
	@include('layouts.footer')
</div>
</body>
</html>