@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/apply.css') }}">
@endpush

<section id="apply" class="container-fluid">

	<div id="applyImage" class="background-image darker"></div>

	<div id="apply-form" class="col-sm-6 col-sm-offset-3">
		
		<h3 id="applyTitle">apply</h3>
		@if(Session::has('confirm'))
			<div class="alert alert-success col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1 col-xs-8 col-xs-offset-2" role="alert">
                {{ Session::get('confirm') }}
            </div>
		@endif
		<form action="{{ url('apply') }}" method="POST" enctype="multipart/form-data" class="col-sm-6 col-sm-offset-3">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Name :</label>
				<input id="name" class="form-control" type="text" name="name" required>
			</div>
			
			<div class="form-group">
				<label for="familly-name">Familly name :</label>
				<input id="familly-name" class="form-control" type="text" name="familly-name" required>
			</div>
			
			<div class="form-group">
				<label for="phone">Phone number :</label>
				<input id="phone" class="form-control" type="tel" name="phone" required>
			</div>
			
			<div class="form-group">
				<label for="email">E-mail address :</label>
				<input id="email" class="form-control" type="email" name="email" required>
			</div>
			
			<div class="form-group">
				<label>Send us your curriculum vitae (pdf format only)</label>
				<input id="cv" type="file" class="form-control" name="cv" required>
			</div>
			
			<div class="form-group col-xs-6 col-xs-offset-3">
				<input type="submit" class="btn btn-lg" name="apply-form" value="apply">
			</div>
		</form>
	</div>
</section>

@push('scripts')
	<script type="text/javascript">
		var applyImage = document.getElementById('applyImage');
		var applyTitle = document.getElementById('applyTitle');

		applyImage.style.backgroundImage = "url(images/"+ applyTitle.textContent.replace(/ /g, "-") +".jpg)";
	</script>
@endpush