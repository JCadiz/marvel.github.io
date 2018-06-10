@extends('layouts.web')

@section('slider')
@endsection

@section('content')
<!-- ****** New Arrivals Area Start ****** -->
<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2>Marvel Movie:  {{ $movie->title }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row karl-new-arrivals">

                    <!-- Single gallery Item Start -->

                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig margen" data-wow-delay="0.2s">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{ asset('peliculas/' . $movie->imagen) }}" alt="{{ $movie->imagen }}">
                            <div class="product-quicview">
                                <a href="#" data-toggle="modal" data-target="#quickview{{ $movie->id }}"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <h2 class="product-price text-center">{{ $movie->title }}</h2>
                        </div>
                    </div>

<!-- ****** Quick View Modal Area Start ****** -->
    <div class="modal fade" id="quickview{{ $movie->id }}" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
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
                                <img src="{{ asset('peliculas/' . $movie->imagen) }}" alt="">
                            </div>
                        </div>
                    <div class="col-12 col-lg-7">
                        <div class="quickview_pro_des">
                                <h4 class="title">{{ $movie->title}}</h4>
                            <div class="top_seller_product_rating mb-15">
                                 <p><strong> Rating: </strong> {{ $movie->rating}} of IMBD  <i class="fa fa-star" aria-hidden="true"></i></p>
                            </div>
                                <p class="text-justify">{{ $movie->descripcion }}</p>
                                <p><strong> Director: <strong/>{{ $movie->director }}</p>
                                <p><strong> Relase Date:</strong>{{ $movie->releaseDate }}</p>
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



        </div>
    </div>
</section>
<!-- ****** New Arrivals Area End ****** -->

<div class="shop_pagination_area wow d-flex justify-content-center mb-4 fadeInUp" data-wow-delay="1.1s">
    <nav aria-label="Page navigation ">
        <ul class="pagination pagination-sm">
            <li class="page-item">
                <a class="page-link" href="{{ route('movies2') }}">back</a>
            </li>
        </ul>
    </nav>
</div>
@endsection
