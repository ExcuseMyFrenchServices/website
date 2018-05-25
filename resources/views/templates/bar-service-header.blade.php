@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
@endpush

<section id="header" class="container-fluid parallax-section">
  
  <div id="headerImage" class="background-image grayHeader"></div>
  
  <h1 class="col-sm-2 col-sm-offset-5 col-xs-12">bar</h1>
  <h2 class="col-sm-2 col-sm-offset-5 col-xs-12">service</h2>
  <!-- Add color in the div class -->
	<div id="content" class="">
		<p>
			What’s an event without the drinks flowing? Our bartenders and cocktail connoisseurs will create a ‘live bar’ experience that’s simply très bon! Tailored to suit your style and taste, we offer bartender hire as well as mobile bar hire and an array of beverage packages to ensure your guests stay merry throughout your event.
	    </p>
	</div>

</section>

@push('scripts')
	<script type="text/javascript" src="{{ asset('js/header.js') }}"></script>
@endpush