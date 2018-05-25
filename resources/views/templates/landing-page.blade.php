@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ url(asset('css/landing-page.css')) }}">
@endpush

<section id="landing-page" class="container-fluid parallax-section header">

  <div id="background-image" class="fondu"></div>
  <div id="content">

  	<h1 class="hidden">
        <img src="{{asset('/images/logo-large.png')}}" height="400" width="635" alt="Excuse My French Services">
    </h1>
    @if(isset($exception))
      <h2>Oops, the page you are looking for doesn't exist.</h2>
      <p style="font-size: 2em">But do not worry, here you can find all the pages you need.</p>
    @else
  	 <h2 class='hidden'>Be Your Guest At Your Own Event</h2>
    @endif
    <div id="landing-pages-links" class="container-fluid">
        <ul class="list-inline">
          
          	<li class="link-container col-md-6 col-lg-3 col-xs-6">
                  <a href="{{ url('/hospitality-staff') }}">
                      <h3 class="link">staff</h3>
                      <h4>hospo & promo</h4>
                  </a>
              </li>
          
              <li class="link-container col-md-6 col-lg-3 col-xs-6">
                  <a href="{{ url('/bar-service') }}">
                      <h3 class="link">bar</h3>
                      <h4>service</h4>
                  </a>
              </li>   	
          
              <li class="link-container col-md-6 col-lg-3 col-xs-6">
                  <a href="{{ url('/coffee-service') }}">
                      <h3 class="link">coffee</h3>
                      <h4>service</h4>
                  </a>
              </li>   
          
              <li class="link-container col-md-6 col-lg-3 col-xs-6">
                  <a href="{{ url('/event') }}">
                      <h3 class="link" >event</h3>
                      <h4>management</h4>
                  </a>
              </li>   
        </ul>
    </div>

  </div>
</section>

@push('scripts')
    <script type="text/javascript">

    function downloadJSAtOnload() {
      var element = document.createElement("script");
      element.src = "{{ url(asset('js/landing-page.js')) }}";
      document.body.appendChild(element);
    }

    if (window.addEventListener)
      window.addEventListener("load", downloadJSAtOnload, false);
    else if (window.attachEvent)
      window.attachEvent("onload", downloadJSAtOnload);
    else window.onload = downloadJSAtOnload;

    </script>
@endpush