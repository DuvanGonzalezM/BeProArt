<!DOCTYPE html>
<html>
@include('layouts.head')
<body>
	{{-- HEADER --}}
@include('layouts.header')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-2">
				{{-- ASIDE --}}
			@include('layouts.aside')
		</div>
		<div class="col-lg-10">
				{{-- SECTION --}}
			@include('layouts.section')
		</div>
	</div>
</div>
	{{-- FOOTER --}}
@include('layouts.footer')
</body>
</html>