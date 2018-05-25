<header>
	<nav class="navbar scrolled">
	  <div id="logo" class="col-lg-4 col-sm-4 col-xs-4">
	    <a href="/" title="Home Page"><img src="images/logo-small.png" alt="small logo of the company" height="100" width="98"> <span class="hidden-xs">excuse my french services</span></a>
	  </div>

	  <!-- Phone menu -->
	  <div id="phone-menu" class="col-xs-4 hidden-lg hidden-md hidden-sm">
	    <a href="#" id="burger" title="Show menu"><span class="fa fa-bars fa-2x"></span></a>
	  </div>
	  <!-- End Phone menu -->

	  <div id="menu" class="hidden-xs col-md-8 col-sm-8">

	  <div id="social">
	  		<a href="mailto:contact@excusemyfrenchservices.com" target="_top" title="contact us">
	  			<span id="email-icon" class="fa fa-envelope-o fa-2x"></span>
	  		</a>
	  </div>

	    <ul class="hidden-xs navbar-nav"> 
	      <li role="presentation"><a href="/" title="back to home page">home</a></li> 
	    	<li>	
	    		<div id="menuDropdown" class="dropdown">
	    			<button class="dropdown-toggle col-sm-12" type="button" id="dropdownMenu" data-toggle="dropdown" onclick="location.href = '/services'">
	    				services
	    				<span class="caret"></span>
	    			</button>
	    			<ul id="droppedUl" class="dropdown-menu" aria-labelledby="dropdownMenu">	
	    				<li><a href="{{ url('/hospitality-staff') }}" title="Go to Staff dedicated page">staff - Hospo and promo</a></li>
	    				<li><a href="{{ url('/bar-service') }}" title="Go to Bar dedicated page">bar service</a></li>
	    				<li><a href="{{ url('/coffee-service') }}" title="Hire a coffee cart there">coffee service</a></li>
	    				<li><a href="{{ url('/event') }}" title="Book a tailored event on this page">event management</a></li>
	    			</ul>
	    		</div>
	    	</li>	
	      <li role="presentation"><a href="{{ url('/about') }}" title="Discover more about EMF">about</a></li>
	      <li role="presentation"><a href="{{ url('/events') }}" title="We are proud of our partner, meet them">events</a></li>
	    </ul>

	  </div>
	</nav>
</header>