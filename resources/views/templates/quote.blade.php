@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer-form.css') }}">
@endpush

<section id="quote-request">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="row">
            <div id="quote-logo" class="col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
                <img src="{{ asset('images/logo-black.png') }}" height="200" width="197" alt="emf logo">
            </div>
        </div>
        <div class="row">
            <h3>Experience <br> great service</h3>
            @if(Session::has('confirm'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('confirm') }}
            </div>
            @else
            <p>
                Like to learn more about our staff and services? Get in touch with the Excuse my French team today!
            </p>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <button class="form-control" data-toggle="modal" data-target="#quoteform">Request a quote</button>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div id="quoteform" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content container-fluid">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 id="footerFormTitle" class="modal-title">book your event</h4>
      </div>
      <div class="modal-body">
        @if(Session::has('confirm'))
            <div class="alert alert-success col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1 col-xs-8 col-xs-offset-2" role="alert">
                {{ Session::get('confirm') }}
            </div>
        @endif
        <form method="POST" action="{{ url('/send-quote') }}" class="col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-1 col-xs-8 col-xs-offset-2">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="name" placeholder="Company or Organizer name" required>
            </div>
            <div class="form-group">
                <input type="tel" class="form-control input-lg" name="phone" placeholder="phone" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="email" placeholder="e-mail" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="date" placeholder="dd/mm/yyyy" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="location" placeholder="location">
            </div>       
            <input type="hidden" name="service" value="{{ $url }}">                                                   
            <div class="form-group">
                <input type="submit" class="btn btn-lg form-control" name="footer-form" value="Get a free quote">
            </div>
        </form>
      </div>
      <div class="modal-footer col-xs-12">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


@push('scripts')
    <script type="text/javascript" src="{{ asset('js/footer-form.js') }}"></script>
@endpush