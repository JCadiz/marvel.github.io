@extends('layouts.web')

@section('title', ' Marvel')

@section('slider')
 <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(gallery/logo.gif);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Welcome to Marvel</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Visit Our section of Movies</h2>
                                    <a href="{{ route('movies') }}" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(gallery/SliderHom.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Also can see a few important characters</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Only in Charcater section</h2>
                                    <a href="{{ route('personajes') }}" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Slide Start -->
                <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(gallery/slider3.png);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                    <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* And remenber</h6>
                                    <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Thanos Demand your Silence</h2>
                                    <a href="{{ route('series') }}" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Keep Watching</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('content')
 <section class="top_catagory_area d-md-flex clearfix " width='100vw' height="75vh">
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(gallery/avengersIW.jpg);">
                <div class="catagory-content">
                    <h6>Now on Cinema</h6>
                    <h2>Avengers Infinity War</h2>
                   <a href="#" data-toggle="modal" data-target="#avengers" class="btn karl-btn">Watch The Trailer</a>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(gallery/wasp.jpg);">
                <div class="catagory-content">
                    <h6>Coming Soon</h6>
                    <h2>AntMan & the Wasp</h2>
                   <a href="#" data-toggle="modal" data-target="#antman" class="btn karl-btn">Watch The Trailer</a>
                </div>
            </div>
 </section>

<!-- ****** Quick View Modal Avengerst ****** -->
<div class="modal fade" id="avengers" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close" onclick="detener1()">
                    <span aria-hidden="true">&times;</span>
                </button>

                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                            <video src="video/AIW.mp4 " preload controls id="#video1" width="770px" height="auto"></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

<!-- ****** Quick View Modal Ant-Man ****** -->
<div class="modal fade" id="antman" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close" onclick="detener2()">
                    <span aria-hidden="true">&times;</span>
                </button>

                   <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                            <video src="video/antman.mp4 " preload controls id="#video2" width="770px" height="auto"></video>
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

  <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(tienda/promocion.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-end justify-content-end">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                            <h2>Spider Man Unisex Hoodie <span class="karl-level">Hot</span></h2>
                            <p>* Free shipping until 25 Dec 2018</p>
                            <div class="offer-product-price">
                                <h3><span class="regular-price">$70.90</span> $60.90</h3>
                            </div>
                            <a href="{{ route('prueba') }}" class="btn karl-btn mt-30">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
