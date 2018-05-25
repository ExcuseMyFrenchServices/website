@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/services-body.css') }}">
@endpush

<section id="services-body" class="initial-section">
	<div class='col-xs-12'>
		<div id="services" class="row bigger-font">

			<div class="service col-sm-3">
				<a href="{{ url('/hospitality-staff') }}">
				<div class="service-img-container">
					<div class="service-content bigger-top">
						<div class="services-title">
							<h3>staff</h3>
							<h4>hospo & promo</h4>
						</div>
					</div>
				</div>
				</a>
			</div>

			<div class="service col-sm-3">
				<a href="{{ url('/bar-service') }}">
				<div class="service-img-container">
					<div class="service-content bigger-top">
						<div class="services-title">
							<h3>bar</h3>
							<h4>service</h4>
						</div>
					</div>
				</div>
				</a>
			</div>

			<div class="service col-sm-3">
				<a href="{{ url('/coffee-service') }}">
				<div class="service-img-container">
					<div class="service-content bigger-top">
						<div class="services-title">
							<h3>coffee</h3>
							<h4>service</h4>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="service col-sm-3">
				<a href="{{ url('/event-management') }}">
				<div class="service-img-container">
					<div class="service-content bigger-top">
						<div class="services-title">
							<h3>event</h3>
							<h4>management</h4>
						</div>
					</div>
				</div>
				</a>
			</div>

		</div>
	</div>
</section>

@push('scripts')
	<script type="text/javascript" src="{{asset('js/services-body.js')}}"></script>
@endpush