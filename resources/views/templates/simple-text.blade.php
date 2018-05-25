@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/simple-text.css') }}">
@endpush

<section class="simple-text">
	
	<div class="square white col-sm-6">
			<p>
				Our success lies in hiring the right people for the right event, every time. Some companies can never get it right, yet our years of expertise in recruiting professional and committed staff enable us to match skillsets with our client’s needs and requirements.
			</p>
			<p>
				At EMF, our team of highly-trained event personnel are well-presented, enthusiastic and passionate about working in the field. We’re about getting things right the first time, so we ensure our people are thoroughly briefed to make your event the best experience possible.
			</p>
			<p>
				Above all, we understand that people and relationships form the epicentre of everything we do. Whether it’s from our staff, clients or their guests – we value trust and transparency.
			</p>
	</div>

	<div id="service-about-img" class="square col-sm-6 hidden-xs">
		
	</div>

	<div class="square col-sm-6">
		<img id="service-testimonials" src="{{ asset('images/service-testimonials.jpg') }}">
		<div class="col-sm-10 col-sm-offset-1">
			@include('templates.testimonials')
		</div>
	</div>

	<div class="square white col-sm-6">
		<h3>Our clients, our priority</h3>
		<p>We take pride in our premium service delivery – our clients can’t stop raving, either!</p>
		<div>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>

</section>

@push('scripts')
	<script type="text/javascript" src="{{ asset('js/simple-text.js')}}"></script>
@endpush
