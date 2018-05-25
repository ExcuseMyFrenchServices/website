@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
@endpush

<section id="header" class="container-fluid parallax-section">
  
  <div id="headerImage" class="background-image grayHeader"></div>
  
  <h1 class="col-sm-2 col-sm-offset-5 col-xs-12">coffee</h1>
  <h2 class="col-sm-2 col-sm-offset-5 col-xs-12">service</h2>
  <!-- Add color in the div class -->
	<div id="content" class="">
		<p>
			Partnering up with our friends at Draft Coffee Roasters, EMF brings perfectly roasted coffee to your next event. Set up one of our coffee carts at a breakfast seminar or organise a quick caffeine fix for an employee training session at the office; the flexibility of our coffee service is unmatched.
	    	</p>
	</div>

</section>

@push('scripts')
	<script type="text/javascript" src="{{ asset('js/header.js') }}"></script>
@endpush