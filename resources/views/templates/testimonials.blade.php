@push('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/testimonials.css') }}">
@endpush

<section id="testimonials" class="initial-section section">

  <div class="col-xs-12">
    <div id="testimonials-carousel" class="carousel slide" data-ride="carousel" data-interval="0">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#testimonials-carousel" data-slide-to="1"></li>
          <li data-target="#testimonials-carousel" data-slide-to="2"></li>
      </ol>
     
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/black.png" alt="background of the testimonial">
          <div class="carousel-caption">
            <p>
              Excuse My French Services have assisted us with a variety of high-end functions and events including luxury yacht charters, corporate events, boardroom lunches and private degustation dinners and parties. JB and his team have always been professional, efficient and personal. Great service and highly organised!
            </p>
            <h4>
              Steve Edelmuth
            </h4>
            <h4>
              Operation Manager at June Edelmuth Catering
            </h4>
          </div>
        </div>
        <div class="item">
          <img src="images/black.png" alt="background of the testimonial">
          <div class="carousel-caption">
            <p>
              Reliable, always on time, exceptionally well presented and is willing to take the initiative and lead from the front, together with the fact that he is always personally contactable. I would not hesitate to recommend JB and any of his staff to anyone.
            </p>
            <h4>
              Chef Matt Bates
            </h4>
            <h4>
              Elite Chefs Sydney
            </h4>
          </div>
        </div>
        <div class="item">
          <img src="images/black.png" alt="background of the testimonial">
          <div class="carousel-caption">
            <p>
              Reliable, Efficient, Professional. Our first choice for hire event staff here at Catering Project.
            </p>
            <h4>
              Laura
            </h4>
            <h4>
              Catering Manager at Catering Project
            </h4>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#testimonials-carousel" title="Previous testimonial" role="button" data-slide="prev">
        <span class="fa fa-chevron-left fa-3x" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="right carousel-control" href="#testimonials-carousel" role="button" data-slide="next">
        <span class="fa fa-chevron-right fa-3x" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>            
  </div>  
   
</section>