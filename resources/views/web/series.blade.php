@extends('layouts.web')

@section('title', ' Marvel :: Tv Show')

@section('slider')
@endsection

@section('content')

<!-- ****** New Arrivals Area Start ****** -->
<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2> Tv Show </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row karl-new-arrivals">

                    <!-- Single gallery Item Start -->
                    @foreach($series as $serie)
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="gallery/{{ $serie->imagen }}" alt="">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview{{ $serie->id }}"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h2 class="product-price text-center">{{ $serie->title }}</h4>
                        </div>
                    </div>

<!-- ****** Quick View Modal Area Start ****** -->
    <div class="modal fade" id="quickview{{ $serie->id }}" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
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
                                <img src="gallery/{{ $serie->imagen}}" alt="">
                            </div>
                        </div>
                    <div class="col-12 col-lg-7">
                        <div class="quickview_pro_des">
                                <h4 class="title">{{ $serie->title}}</h4>
                            <div class="top_seller_product_rating mb-15">
                              <p><strong> Rating: </strong> {{ $serie->rating}} of IMBD  <i class="fa fa-star" aria-hidden="true"></i></p>

                            </div>
                                <p class="text-justify">{{ $serie->descripcion }}</p>

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
@endsection
