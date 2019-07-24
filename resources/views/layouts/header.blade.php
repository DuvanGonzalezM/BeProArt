<header class="bg-secondary sticky-top">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2" id="logo">
				<label class="h4">BeProArt</label>
			</div>
			<div class="form-group col-lg-6" id="seeker">
				<form action="/s" method="GET">
					{{-- @csrf --}}
					<div class="input-group">
						<div class="input-group-prepend">
							<button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Todas</button>
							<div class="dropdown-menu" style="background-color: #6c757d;">
								<a class="dropdown-item" href="#">Tecnologia</a>
								<a class="dropdown-item" href="#">Ropa</a>
								<a class="dropdown-item" href="#">Comida</a>
								<div role="separator" class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Separated link</a>
							</div>
						</div>
						<input type="text" name="seeker" class="form-control form-control-lg form-control-borderless" placeholder="Laptop, Tv, Clothing, etc..." value="{{isset($_GET['seeker']) ? $_GET['seeker'] : ''}}">
						<div class="input-group-append">
							<button type="submit" class="btn btn-success btn-lg input-group-btn"><i class="fas fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-3 pull-right" id="slogan">
				<label class="h4">All Articles the best price</label>
			</div>
		</div>
	</div>
</header>