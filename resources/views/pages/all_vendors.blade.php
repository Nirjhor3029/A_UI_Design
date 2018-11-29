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
<section class="page-section pricing" style="margin-top: 10%;">
    <div class="container wow fadeIn mb-4">
        <div class="text-center wow fadeIn">
            <p style="color:black; font-size:26px;">Find vendors at every budget</p>

            <p style="color:black; font-size:18px;">Venues, catering, decoration, photographers & more</p>
        </div>

        <div class="vendors">
            <div class="row text-center justify-content-md-center">
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
            <div class="row text-center justify-content-md-center">
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
            <div class="row text-center justify-content-md-center">
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

            </div>



        </div>


        <div class="ayojok_services" style="background-color: #006666">
            <!-- Sub Service Start-->
            <div class="row text-center mt-4">
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='dj')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">DJ</h4>
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
                                <h4 style="width:100%;">Makeup Artist</h4>
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
                                <h4 style="width:100%;">Bakeries</h4>
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
                                <h4 style="width:100%;">Mehdi</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row text-center mt-4">
                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='vehicle')}}">

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

                        <a href="{{url('vendors/'.$catagory ='holud')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Holud</h4>
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
                                <h4 style="width:100%;">Holud</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xs-6 col-lg-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='holud snacks')}}">

                            <div class="img-wrapper">
                                <h4 style="width:100%;">Holud Snacks</h4>
                                <img src="https://ayojok.com/ideas-and-stories/wp-content/uploads/2018/11/37935754_1167663213386587_8347775346484969472_o.jpg"
                                     class="img-fluid mx-auto zoom " alt="">
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>



        <!-- ./Sub Service Ends-->
        <a href="{{url('all_vendors')}}" class="btn btn-danger rounded btn-sm custom-btn"
           style="color: white;padding: 1% 5%;text-transform: none;background-color: #810D28">Load more</a>

    </div>

</section>

@endsection
