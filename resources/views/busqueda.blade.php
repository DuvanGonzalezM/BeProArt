@extends('app')
@section('title', 'Home')
@section('section')
	<section>
		<h1>{{$UrlAmazon}}</h1>
		<div class="col-lg-16">
			<div class="title">
				<label class="h3">Resultados de: <b>{{$_GET['seeker']}}</b></label>
			</div>
			<div class="container">
				<div class="row">
					@foreach($divs as $div)
					<div class="card resul-item">
						<a href="{{$div['link']}}">
							<img src="{{$div['img']}}" class="card-img-top" alt="{{$div['descript']}}" style="width: 100%; height: 10rem;">
							<div class="card-body">
								<h5 class="card-title">
									<b>{{$div['price']}}</b>
								</h5>
								<p class="card-text">
									{{$div['descript']}}
								</p>
							</div>
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection