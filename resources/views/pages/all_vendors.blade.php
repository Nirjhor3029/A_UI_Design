<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/29/2018
 * Time: 3:20 PM
 */


?>

@extends('layouts.app')

@section('content')

        <!-- Our Service -->
<section class="page-section pricing" style="margin-top: 5%;text-transform: none">
    <div class="container wow fadeIn mb-5">
        <div class="text-center wow fadeIn">
            <p style="color:black; font-size:26px;">Find vendors at every budget</p>

            <p style="color:black; font-size:18px;">Venues, catering, decoration, photographers & more</p>
        </div>

        {{--Ayojok Services--}}
        <div class="wow fadeIn text-center mt-5" style="visibility: visible; animation-name: fadeIn;">
            <h3 id="service-name" style="color: rgba(10, 10, 10, 0.91);text-transform: none">Ayojok Services</h3>
            <hr class="colored" style="max-width: 200px;">
        </div>

        <div class="vendors" style="text-transform: none">
            <div class="row text-center justify-content-md-center mt-4">
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='venue')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Venue</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>

                    </div>

                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='catering')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Catering</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                        <a href="{{url('vendors/'.$catagory ='photography & cinematography')}}"></a>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='photography & cinematography')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Photography</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='decoration')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Decoration</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-center justify-content-md-center mt-4">
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='venue')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Invitation cards</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>

                    </div>

                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='catering')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">DJ</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                        <a href="{{url('vendors/'.$catagory ='photography & cinematography')}}"></a>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='photography & cinematography')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Makeup Artist</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='decoration')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Bakeries</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-center justify-content-md-center mt-4">
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='venue')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Mehedi</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>

                    </div>

                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='catering')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Kazi</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                        <a href="{{url('vendors/'.$catagory ='photography & cinematography')}}"></a>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='catering')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Vehicle</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                        <a href="{{url('vendors/'.$catagory ='photography & cinematography')}}"></a>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='catering')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Light & Sound</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                        <a href="{{url('vendors/'.$catagory ='photography & cinematography')}}"></a>
                    </div>
                </div>

            </div>

            <div class="row text-center justify-content-md-center mt-4">
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='venue')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Holud & Snacks</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>

                    </div>

                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='catering')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Dala Kula</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                        <a href="{{url('vendors/'.$catagory ='photography & cinematography')}}"></a>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='catering')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Holud Accessories</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                        <a href="{{url('vendors/'.$catagory ='photography & cinematography')}}"></a>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='catering')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Wedding Accessories</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                        <a href="{{url('vendors/'.$catagory ='photography & cinematography')}}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--Ayojok Products --}}

    {{--<div class="wow fadeIn text-center mt-5" style="visibility: visible; animation-name: fadeIn;">
        <h3 id="service-name" style="color: rgba(10, 10, 10, 0.91);text-transform: none">Products</h3>
        <hr class="colored">
    </div>

    <div class="ayojok_services">
        <!-- Sub Service Start-->
        <div class="row text-center mt-4">
            <div class="col-xs-6 col-lg-3">
                <div class="item">

                    <a href="{{url('vendors/'.$catagory ='dj')}}">

                        <div class="img-wrapper">
                            <h4 style="width:100%;">Vehicle</h4>
                            <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                 class="img-fluid mx-auto zoom" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="item">

                    <a href="{{url('vendors/'.$catagory ='makeup artist')}}">

                        <div class="img-wrapper">
                            <h4 style="width:100%;">Light & Sound</h4>
                            <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                 class="img-fluid mx-auto zoom" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="item">

                    <a href="{{url('vendors/'.$catagory ='bakeries')}}">

                        <div class="img-wrapper">
                            <h4 style="width:100%;">Holud Snacks</h4>
                            <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                 class="img-fluid mx-auto zoom" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="item">

                    <a href="{{url('vendors/'.$catagory ='mehdi')}}">

                        <div class="img-wrapper">
                            <h4 style="width:100%;">Dala Kula</h4>
                            <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                 class="img-fluid mx-auto zoom" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row text-center mt-4 mb-5">
            <div class="col-xs-6 col-lg-3">
                <div class="item">

                    <a href="{{url('vendors/'.$catagory ='vehicle')}}">

                        <div class="img-wrapper">
                            <h4 style="width:100%;">Holud Accessories</h4>
                            <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                 class="img-fluid mx-auto zoom" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="item">

                    <a href="{{url('vendors/'.$catagory ='holud')}}">

                        <div class="img-wrapper">
                            <h4 style="width:100%;">Wedding Accessories</h4>
                            <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                 class="img-fluid mx-auto zoom" alt="">
                        </div>
                    </a>
                </div>
            </div>


        </div>

    </div>--}}


    </div>

</section>

@endsection
