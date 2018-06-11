@extends('layouts.web')

@section('title', ' Marvel :: About')

@section('slider')
@endsection

@section('content')
<section class="top_catagory_area d-md-flex clearfix " width='100vw' height="75vh">
    <div class="row d-flex flex-wrap">
        <div class="col-md-4 col-lg-4 col-sm-12 single_catagory_area d-flex align-items-center bg-img" style="background-image: url(gallery/about1.jpg);">
        </div>
        <div class="col-md-8 col-lg-8 col-sm-12">
            <h1 class="text-center my-4">History</h1>
            <p class="text-justify mx-5">Marvel Comics is the common name and primary imprint of Marvel Worldwide Inc., formerly Marvel Publishing, Inc. and Marvel Comics Group, a publisher of American comic books and related media. In 2009, The Walt Disney Company acquired Marvel Entertainment, Marvel Worldwides parent company. Marvel started in 1939 as Timely Publications, and by the early 1950s, had generally become known as Atlas Comics. The Marvel branding began 1961, the year that the company launched The Fantastic Four and other superhero titles created by Stan Lee, Jack Kirby, Steve Ditko, and many others. Marvel counts among its characters such well-known superheroes as Spider-Man, Wolverine, the Hulk, Thor, Iron Man, Captain America, Daredevil, Ghost Rider, Dr. Strange, Punisher, Deadpool and the Black Panther, and such teams as the Avengers, the X-Men, the Guardians of the Galaxy, and the Fantastic Four, and antagonists including Doctor Doom, the Red Skull, the Green Goblin, Thanos, Ultron, Doctor Octopus, Magneto, and Loki. Most of Marvels fictional characters operate in a single reality known as the Marvel Universe, with most locations mirroring real-life places; many major characters are based in New York City.</p>
        </div>
    </div>
</section>
<section class="top_catagory_area d-md-flex clearfix " width='100vw' height="75vh">
    <div class="row d-flex flex-wrap">
        <div class="col-md-8 col-lg-8 col-sm-12">
            <h1 class="text-center my-4">Other Products</h1>
            <p class="text-justify mx-5"><strong>Games: </strong>In June 1993, Marvel issued its collectable caps for milk caps game under the Hero Caps brand. In 2014, the Marvel Disk Wars: The Avengers Japanese TV series was launched together with a collectible game called Bachicombat, a game similar to the milk caps game, by Bandai.</p>
            <p class="text-justify mx-5"><strong>Films: </strong>As of the start of September 2015, films based on Marvels properties represent the highest-grossing U.S. franchise, having grossed over $7.7 billion as part of a worldwide gross of over $18 billion.</p>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12 single_catagory_area d-flex align-items-center bg-img" style="background-image: url(gallery/about2.jpg);">
        </div>
    </div>
</section>
<!-- ****** Popular Brands Area Start ****** -->
        <section class="karl-testimonials-area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>Marvel Owners</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="karl-testimonials-slides owl-carousel">

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote"></span>
                                <h6>Is an American comic-book writer, editor, film executive producer, actor and publisher. He was formerly editor-in-chief of Marvel Comics, and later its publisher and chairman before leaving the company to become its chairman emeritus, as well as a member of the editorial board.</h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="gallery/stan.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Stan Lee</p>
                                        <span> Manhattan, New York City,</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote"></span>
                                <h6>On August 31, 2009, The Walt Disney Company announced a deal to acquire Marvel Comics parent corporation, Marvel Entertainment, for $4 billion or $4.2 billion, with Marvel shareholders to receive $30 and 0.745 Disney shares for each share of Marvel they own. As of 2008, Marvel and its major, longtime competitor DC Comics shared over 80% of the American comic-book market As of September 2010, Marvel switched its bookstores distribution company from Diamond Book Distributors to Hachette Distribution Services. </h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="gallery/disney.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Marvel Entertainment, LLC</p>
                                        <span>California, Los Angeles</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ****** Popular Brands Area End ****** -->
@endsection
