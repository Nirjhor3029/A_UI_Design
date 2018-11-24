@extends('layouts.app')

@section('content')
  <!-- Masthead -->
  <header class="masthead" style="background-image: url('img/backgrounds/bg-header.jpg');">

<div class="scroll-down">

  {{ Form::open(['route'=>'find', 'method' => 'post'])}}
  <div style="text-align:center;" class="catagory input-group">
    <div class="col-lg-4 prefix">
      <span>I am looking for</span>
    </div>
    <div class="col-lg-7 search-cat">
      <select class="form-control" name="catagory">
        @foreach ($vendors as $vendor)
          <option value="{{$vendor->id}}" style="text-transform: capitalize;">{{$vendor->name}}</option>
        @endforeach
        @foreach ($services as $service)
          <option value="{{$service->id}}" style="text-transform: capitalize;">{{$service->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-lg-1 findbtn">
      {{ Form::button('Find',['class'=>'btn btn-search','type'=>'submit'])}}
    </div>
  </div>
  {{ Form::close() }}
</div>

</header>

<!-- /End FB Profile Style -->
<div class="container">
  <div class="profile">
    <div class="row">
      <div class="col-lg-3 text-center">
        <img class="fb-image-profile thumbnail" src="img/logo.jpg" alt="Ayojok Logo"/>
      </div>
      <div class="col-lg-9">
        <div class="fb-profile-text" style="text-align:justify;">
          <p><strong>Ayojok.com</strong> is a place where you can browse and pick your desired vendors. We are here to save your time and money while keeping you trendy by delivering quality services for your events.
          </p>
          <p>From event accessories and decorations to photographers and venues, find all event related services &amp; products in one place and book or purchase them right away at the ease of your comforts anytime, anywhere.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /End FB Profile Style -->

<!-- Values Section -->

<section id="values">
  <div class="container">
    <div class="text-center wow fadeIn">
      <h2>How It Works</h2>
      <hr class="colored">

    </div>
    <div class="row mt-4">
      <!-- Service Item 1 -->
      <div class="col-lg-4 wow fadeIn service" data-wow-delay=".4s">
        <a href="{{url('how-it-works')}}">
          <div class="process text-center">
            <img src="img/icons/icon-23.png" class="img-responsive workflow" alt="Lights">
            <p class="process-title">Search</p>
          </div>
        </a>
      </div>
      <!-- Service Item 2 -->
      <div class="col-lg-4 wow fadeIn service" data-wow-delay=".4s">
        <a href="{{url('how-it-works')}}">
          <div class="process text-center">
            <img src="img/icons/booking.png" class="img-responsive workflow" alt="Lights">
            <p class="process-title">Booking</p>
          </div>
        </a>
      </div>
      <!-- Service Item 3 -->
      <div class="col-lg-4 wow fadeIn service" data-wow-delay=".4s">
        <a href="{{url('how-it-works')}}">
          <div class="process text-center">
            <img src="img/icons/icon-25.png" class="img-responsive workflow" alt="Lights">
            <p class="process-title">Confirmation</p>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- Our Service -->
<section class="page-section pricing mt-5" style="background-image: url('img/backgrounds/bg-service.jpg');">
  <div class="container wow fadeIn mt-4 mb-4">
    <div class="text-center wow fadeIn">
      <h2 style="color:#F47F20;">Vendors</h2>
    </div>
    <div class="row text-center justify-content-md-center">
      <div class="main-cat">
        <a href="{{url('vendors/'.$catagory ='venue')}}">
          <img src="img/icons/icon-01.png" class="img-responsive mainservice" alt="">
        </a>
        <p class="service-title">Venue</p>
      </div>
      <div class="main-cat">
        <a href="{{url('vendors/'.$catagory ='catering')}}">
          <img src="img/icons/icon-02.png" class="img-responsive mainservice" alt="">
        </a>
        <p class="service-title">Catering</p>
      </div>
      <div class="main-cat">
        <a href="{{url('vendors/'.$catagory ='photography & cinematography')}}">
          <img src="img/icons/icon-03.png" class="img-responsive mainservice" alt="">
        </a>
        <p class="service-title">Photography</p>
      </div>
      <div class="main-cat">
        <a href="{{url('vendors/'.$catagory ='decoration')}}">
          <img src="img/icons/decoration.png" class="img-responsive mainservice" alt="">
        </a>
        <p class="service-title">Decoration</p>
      </div>
    </div>

    <!-- Sub Service Start-->
    <div class="row text-center mt-4">
      <div class="col-xs-6 col-lg-3">
        <a href="{{url('vendors/'.$catagory ='dj')}}">
          <img src="img/icons/dj.png" class="subservice" alt="">
        </a>
        <p class="subservice-title">DJ</p>
      </div>
      <div class="col-xs-6 col-lg-3">
        <a href="{{url('vendors/'.$catagory ='makeup artist')}}">
          <img src="img/icons/icon-06.png" class="subservice" alt="">
        </a>
        <p class="subservice-title">Makeup Artist</p>
      </div>
      <div class="col-xs-6 col-lg-3">
        <a href="{{url('vendors/'.$catagory ='bakeries')}}">
          <img src="img/icons/bakeries.png" class="subservice" alt="">
        </a>
        <p class="subservice-title">Bakeries</p>
      </div>
      <div class="col-xs-6 col-lg-3">
        <a href="{{url('vendors/'.$catagory ='mehdi')}}">
          <img src="img/icons/mehedi.png" class="subservice" alt="">
        </a>
        <p class="subservice-title">Mehedi</p>
      </div>
    </div>

    <div class="row text-center mt-4">
      <div class="col-xs-6 col-lg-3">
        <a href="{{url('services/'.$catagory ='vehicle')}}">
          <img src="img/icons/transportation.png" class="subservice" alt="">
        </a>
        <p class="subservice-title">Vehicle</p>
      </div>
      <div class="col-xs-6 col-lg-3">
        <a href="{{url('services/'.$catagory ='holud')}}">
          <img src="img/icons/accessories.png" class="subservice" alt="">
        </a>
        <p class="subservice-title">Holud Accessories</p>
      </div>
      <div class="col-xs-6 col-lg-3">
        <a href="{{url('services/'.$catagory ='light & sound')}}">
          <img src="img/icons/lights-and-sound.png" class="subservice" alt="">
        </a>
        <p class="subservice-title">Lights & Sound</p>
      </div>

      <div class="col-xs-6 col-lg-3">
        <a href="{{url('services/'.$catagory ='holud snacks')}}">
          <img src="img/icons/holud-snacks.png" class="subservice" alt="">
        </a>
        <p class="subservice-title">Holud Snacks</p>
      </div>

    </div>
    <!-- ./Sub Service Ends-->
  </div>
</div>
</section>

<!-- Event Section -->
<section class="page-section bg-light">
  <div class="container text-center wow fadeIn mt-4 mb-4">
    <div class="row mt-4">
      <div class="col-lg-3 wow fadeIn event-sec" data-wow-delay=".2s">
        <a href="{{url('event-coordinator')}}">
          <div class="hovereffect" style="cursor: pointer;">
            <img class="img-responsive" src="img/service1.jpg" alt="">

            <div class="overlay">
              <h2>Checking</h2>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3 wow fadeIn" data-wow-delay=".2s">
        <a href="{{url('event-coordinator')}}">
          <div class="hovereffect" style="cursor: pointer;">
            <img class="img-responsive" src="img/service2.jpg" alt="">
            <div class="overlay">
              <h2>Monitoring</h2>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3 mb-3 wow fadeIn" data-wow-delay=".2s">

        <div class="event-dec">
          <div style="text-align:center;">
            <h2>Event </h2><h3>Coordinator</h3>
          </div>
          <ul class="servicelist list-group">
            <li class="list-group">Checking</li>
            <li class="list-group">Monitoring</li>
            <li class="list-group">Assuring</li>
          </ul>
        </div>

        <a href="{{url('event-coordinator')}}" class="btn btn-proceed mt-5">Learn More</a>

      </div>
      <div class="col-lg-3 wow fadeIn" data-wow-delay=".2s" >
        <a href="{{url('event-coordinator')}}">
          <div class="hovereffect" style="cursor: pointer;">
            <img class="img-responsive" src="img/service3.jpg" alt="">
            <div class="overlay">
              <h2>Assuring</h2>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Hours Section - Repurposed from Pricing Table -->
<section class="page-section pricing" id="hours" style="background-image: url('img/backgrounds/bg-pricing.jpg')">
  <div class="container wow fadeIn mt-4 mb-4">
    <div class="text-center">
      <h2>Planning Tools</h2>
      <hr class="colored">
      <p>Plan your wedding the right way with our effective planning tools</p>
    </div>
    <div class="row">
      <!-- Pricing Table 1 -->
      <div class="col-md-4">
        <div class="pricing-item">
          @if (Auth::check())
            <a href="{{route('mychecklist',Auth::user()->id)}}">
              <img src="img/planning-tools/my-checklist.png" style="width:25%;margin:3em;" alt="">
              <h4 class="mb-5">My Checklist</h4>
            </a>
          @else
            <a href="#myModal" data-toggle="modal">
              <img src="img/planning-tools/my-checklist.png" style="width:25%;margin:3em;" alt="">
              <h4 class="mb-5">My Checklist</h4>
            </a>
          @endif

        </div>
      </div>
      <!-- Pricing Table 2 -->
      <div class="col-md-4">
        <div class="pricing-item">
          @if (Auth::check())
            <a href="{{ route('myvendors', Auth::user()->id) }}">
              <img src="img/planning-tools/my-vendor.png" style="width:25%;margin:3em;" alt="">
              <h4 class="mb-5">My Vendors</h4>
            </a>
          @else
            <a href="#myModal" data-toggle="modal">
              <img src="img/planning-tools/my-vendor.png" style="width:25%;margin:3em;" alt="">
              <h4 class="mb-5">My Vendors</h4>
            </a>
          @endif
        </div>
      </div>
      <!-- Pricing Table 3 -->
      <div class="col-md-4">
        <div class="pricing-item">
          @if (Auth::check())
            <a href="{{route('mybudget')}}">
              <img src="img/planning-tools/budget-manager.png" style="width:25%;margin:3em;" alt="">
              <h4 class="mb-5">Budget Manager</h4>
            </a>
          @else
            <a href="#myModal" data-toggle="modal">
              <img src="img/planning-tools/budget-manager.png" style="width:25%;margin:3em;" alt="">
              <h4 class="mb-5">Budget Manager</h4>
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Menu Gallery -->
<section class="page-section" id="menu">
  <div class="container wow fadeIn mt-4 mb-4">
    <div class="text-center">
      <h2>Ideas and stories</h2>
      <hr class="colored">
      <p>Get inspired by our trending ideas, stories and DIY tips for your events.</p>
    </div>
    <div class="portfolio-gallery">
      @foreach ($items as $item)
        <div class="item">

          <a href="{{ $item->get_link() }}" title="{{ $item->get_title() }}">

            <div>
              <h4 style="width:100%;">{{ $item->get_title() }}</h4>
              @php
              $sentence = $item->get_description();
              preg_match_all('~<img.*?src=["\']+(.*?)["\']+~', $sentence, $urls, PREG_SET_ORDER);
              $urls = $urls[0][1];
              //echo $urls;
              @endphp
              <img src="{{$urls}}" class="img-fluid mx-auto" alt="">
            </div>
          </a>

        </div>

      @endforeach
</div>

</div>
</section>

@endsection
