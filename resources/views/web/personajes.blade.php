@extends('layouts.web')

@section('title', ' Marvel :: Characters')

@section('slider')
 <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(gallery/slider1.png);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Welcome to our section of character</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Discover details</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(gallery/slider2.png);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* name of the actor</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Only here Character section</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(gallery/sliderp3.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Coming Soon</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">The Black Order</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('content')
<!-- ****** New Arrivals Area Start ****** -->
<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2> Characters </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row karl-new-arrivals">

                    <!-- Single gallery Item Start -->
                    @foreach($personajes as $personaje)
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="gallery/{{ $personaje->imagen }}" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview{{ $personaje->id }}"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h2 class="product-price text-center">{{ $personaje->nombre }}</h4>
                        </div>
                    </div>

<!-- ****** Quick View Modal Area Start ****** -->
    <div class="modal fade" id="quickview{{ $personaje->id }}" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

        <div class="modal-body">
            <div class="quickview_body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <div class="quickview_pro_img">
                                <img src="gallery/{{ $personaje->imagen}}" alt="">
                            </div>
                        </div>
                    <div class="col-12 col-lg-7">
                        <div class="quickview_pro_des">
                                <h4 class="title mb-4">{{ $personaje->nombre}}</h4>

                                <p class="text-justify">{{ $personaje->details }}</p>
                                <p><strong> Actor: <strong/>{{ $personaje->actor }}</p>

                        </div>
                                        <!-- Add to Cart Form -->

                        <div class="share_wf mt-30">
                            <p>Share With Friend</p>
                            <div class="_icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
<!-- ****** Quick View Modal Area End ****** -->
@endforeach


        </div>
    </div>
</section>
<!-- ****** New Arrivals Area End ****** -->

<!-- Pagination -->

<div class="shop_pagination_area wow d-flex justify-content-center mb-4 fadeInUp" data-wow-delay="1.1s">
    <nav aria-label="Page navigation ">
        <ul class="pagination pagination-sm">
            <li class="page-item @if($personajes->previousPageUrl() == null) disabled @endif">
                <a class="page-link" href="{{ $personajes->previousPageUrl() }}"> << </a>
            </li>
            <li class="page-item @if($personajes->lastPage() == $personajes->currentPage()) disabled @endif">
                <a class="page-link" href="{{ $personajes->nextPageUrl() }}"> >> </a>
            </li>

        </ul>
    </nav>
</div>

@endsection
