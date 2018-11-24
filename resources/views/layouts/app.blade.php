<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-K2GSM38');
</script>

{{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
<title>{{ config('app.name', 'Ayojok | One Stop Solution for you event') }}</title>

<!-- Scripts -->
{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

<!-- Bootstrap core CSS -->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

<!-- Custom fonts for this theme -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('vendor/owl-carousel/owl.theme.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('vendor/owl-carousel/owl.transitions.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('vendor/datetimepicker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<!-- Styles -->
{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

<link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/modal.css') }}" rel="stylesheet" type="text/css">
@stack('css')
</head>
<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2GSM38" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <div id="page-top">
    @include('auth.login')
    @include('auth.register')
    @include('extra.leavenum')
    @include('extra.thankyou')
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
      <div class="container">
        <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img class="img-fluid" src="img/logo.png" alt="">
      </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
        Menu
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <!-- Top Menu -updated -->
        <ul class="nav navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('how-it-works')}}">How it Works</a>
          </li>
          <li class="nav-item dropdown">
            {{-- <a class="nav-link" href="{{url('our-services')}}">Ayojok Services</a> --}}
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ayojok Services</a>
            <ul class="megamenu dropdown-menu" id="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <div class="row">
                  <div class="col-lg-6">
                    <ul>
                      <li><a href="{{url('services/'.$catagory ='vehicle')}}">Vehicle</a></li>
                      <li><a href="{{url('services/'.$catagory ='light & sound')}}">Light & Sound</a></li>
                      <li><a href="{{url('services/'.$catagory ='holud snacks')}}">Holud Snacks</a></li>
                      <li><a href="{{url('services/'.$catagory ='dala kula')}}">Dala Kula</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <ul>
                      <li><a href="{{url('services/'.$catagory ='holud')}}">Holud Accessories</a></li>
                      <li><a href="{{url('services/'.$catagory ='wedding')}}">Wedding Accessories</a></li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vendors</a>
            <ul class="megamenu dropdown-menu" id="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <div class="row">
                  <div class="col-lg-6">
                    <ul>
                      <li><a href="{{url('vendors/'.$catagory ='venue')}}">Venue</a></li>
                      <li><a href="{{url('vendors/'.$catagory ='catering')}}">Catering</a></li>
                      <li><a href="{{url('vendors/'.$catagory ='photography and cinematography')}}">Photography & Cinematography</a></li>
                      <li><a href="{{url('vendors/'.$catagory ='decoration')}}">Decoration</a></li>
                      <li><a href="{{url('vendors/'.$catagory ='invitation cards')}}">Invitation Cards</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <ul>
                      <li><a href="{{url('vendors/'.$catagory ='dj')}}">DJ</a></li>
                      <li><a href="{{url('vendors/'.$catagory ='makeup artist')}}">Makeup Artist</a></li>
                      <li><a href="{{url('vendors/'.$catagory ='bakeries')}}">Bakeries</a></li>
                      <li><a href="{{url('vendors/'.$catagory ='mehedi')}}">Mehedi</a></li>
                      <li><a href="{{url('vendors/'.$catagory ='kazi')}}">Kazi</a></li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('event-coordinator')}}">Event Coordinator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://ayojok.com/ideas-and-stories/" target="_blank">Ideas and Stories</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          @if (Route::has('login'))
            @auth
              <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Logout">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
              <li class="nav-item dropdown loggeduser">
                <a class="nav-link dropdown-toggle disabled" id="navbarDropdown" href="{{url('my-account')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><small>Hello,</small>
                  @if (is_null(Auth::user()->fname))
                    {{str_limit(Auth::user()->name,10)}}
                  @else
                    {{Auth::user()->fname}}
                  @endif
                </a>
                <ul class="megamenu dropdown-menu" id="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <ul>
                      <li><a href="{{route('my-account')}}">My Account</a></li>
                      <li><a href="{{route('User.Message')}}">Unread Messages (<span id="inboxmess">@include('extra.mess')</span>)</a></li>
                      <li><a href="{{route('client-orderlist', Auth::user()->id)}}">Orders</a></li>
                      <li><a href="{{route('wishlist.index')}}">Wishlist</a></li>
                      <li><a href="{{route('confirm-query')}}">My Queries</a></li>
                      <li><a href="{{route('payment')}}">Payment</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            @else
              <li class="nav-item"><a class="nav-link" data-toggle="modal" href="#myModal">Login/Registration</a></li>
            @endauth
          @endif
          <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Wishlist">
            <a class="counter nav-link" href="{{url('wishlist')}}">
              <i class="fa fa-heart" aria-hidden="true"></i><span class="badge badge-light" id="wishlistCount">@include('extra.wishlist')</span>
            </a>
          </li>
          {{-- <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Cart">
          <a class="counter nav-link" href="{{url('cart')}}">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-light" id="cartCount">@include('extra.cart')</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Query Cart">
      <a class="counter nav-link" href="{{url('query-cart')}}">
      <i class="fa fa-cart-arrow-down" aria-hidden="true"></i><span class="badge badge-light" id="queryCount">@include('extra.query')</span>
    </a>
  </li> --}}

</ul>
<!-- /End Top menu updated -->
</div>
</div>
</nav>
</div>

@yield('content')

<!-- Footer -->
<footer class="footer" style="background-image: url({{asset('img/backgrounds/bg-footer.jpg')}})">
  <div class="container">
    <!-- Row Contact -->
    <div class="row text-center">
      <div class="col-lg-4 footer-contact-details">
        <h4><i class="fa fa-phone"></i> Call</h4>
        <p>+880-1959 555 666</p>
      </div>
      <div class="col-lg-4 footer-contact-details">
        <h4><i class="fa fa-map-marker"></i> Visit</h4>
        <p>Road 3/A, House 52/1, 5th Floor
          <br>Dhanmondi, Dhaka - 1209 <br>Bangladesh
        </p>
      </div>
      <div class="col-lg-4 footer-contact-details">
        <h4><i class="fa fa-envelope"></i> Email</h4>
        <p>
          <a href="mailto:info@ayojok.com">info@ayojok.com</a>
        </p>
      </div>
    </div>

    <!-- Row Social and Menu -->
    <div class="row">
      <!-- Footer Menu -->
      <div class="col-lg-6 mb-5" style="display:inline;">
        <span class="footer-menu">
          <a href="{{url('about-us')}}">About Us</a>
        </span>
        <span class="footer-menu">
          <a href="{{url('terms-condition')}}">Terms and Condition</a>
        </span>
        <span class="footer-menu">
          <a href="{{url('privacy')}}">Privacy Policy</a>
        </span>
        <span class="footer-menu">
          <a href="{{route('partners')}}">Be Our Partner</a>
        </span>
      </div>
      <!-- Footer Social -->
      <div class="col-lg-2"></div>
      <div class="col-lg-4 text-center" style="display:inline;">

        <span>
          <a href="https://www.facebook.com/ayojokevents" target="_blank">
            <img class="img-fluid img-responsive social" src="{{asset('img/social/icon-21.png')}}" alt="">
          </a>
        </span>

        <span>
          <a href="https://www.youtube.com/channel/UC2Dn5jQAF8TV3_hPAoESk-Q" target="_blank">
            <img class="img-fluid img-responsive social" src="{{asset('img/social/icon-19.png')}}" alt="">
          </a>
        </span>

        <span>
          <a href="https://www.instagram.com/ayojokevents/" target="_blank">
            <img class="img-fluid img-responsive social" src="{{asset('img/social/icon-17.png')}}" alt="">
          </a>
        </span>

      </div>
    </div>
    <!-- Footer Copyright -->
    <div class="row mt-5 mb-5">
      <div class="col-lg-12 text-center">
        <p class="copyright">&copy; 2018 Ayojok</p>
      </div>
    </div>
  </div>
</footer>

<!-- Footer End-->

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendor/vide/jquery.vide.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script src="{{ asset('vendor/wowjs/wow.min.js') }}"></script>
<script src="{{ asset('vendor/datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>



<!-- Contact form JavaScript -->
<script src="{{ asset('js/contact_me.js') }}"></script>
<script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>

<!-- Custom scripts for this theme -->
<script src="{{ asset('js/vitality.js') }}"></script>

<script type="text/javascript">
$(".dropdown").hover(
  function(){
    $('.dropdown-menu', this).stop().fadeIn("fast");
  },
  function(){
    $('.dropdown-menu', this).stop().fadeOut("fast");
  });

  $('.modal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    button.one('focus', function (event) {
      $(this).blur();
    });
  });

  // $('.dropdown-toggle').click(function() {
  //     var location = $(this).attr('href');
  //     window.location.href = location;
  //     return false;
  // });
  jQuery('#levnumber').click(function(e){
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    });
    jQuery.ajax({
      url: "{{ url('/save-phn') }}",
      method: 'post',
      data: {
        number: jQuery('#num').val(),
      },
      success: function(result){
        // $("#levnum .close").click();
        $("#levnum").modal('hide');
        $("#thanks").modal('show');
      }});
    });

    </script>
    <!-- Load Facebook SDK for JavaScript -->
    {{-- <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your customer chat code -->
  <div class="fb-customerchat"
  attribution=setup_tool
  page_id="718944784960805"
  theme_color="#ff7e29">
</div> --}}
@stack('scripts')
</body>
</html>