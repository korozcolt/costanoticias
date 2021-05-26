@extends('layouts.page')
@section('content')
    <!-- Content
                                                                                                                                                                                  ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="section header-stick bottommargin-lg py-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-auto">
                            <div class="d-flex">
                                <span class="badge badge-danger text-uppercase col-auto">¡Último Minuto!</span>
                            </div>
                        </div>

                        <div class="col-lg mt-2 mt-lg-0">
                            <div class="fslider" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false"
                                style="min-height: 0;">
                                <div class="flexslider">
                                    <div class="slider-wrap" id="lastPostsBreaking">
                                        @forelse ($last as $post)
                                            <div class="slide"><a
                                                    href="{{ URL::to('/articulo/' . $post->slug) }}"><strong>{{ $post->title }}</strong></a>
                                            </div>
                                        @empty
                                            <div class="slide"><a href="#"><strong>¡Pronto mas noticias!</strong></a></div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container clearfix">

                <div class="row">
                    <div class="col-lg-12 bottommargin">
                        <div class="row col-mb-50">
                            <div class="col-12">

                                <div class="fancy-title title-border">
                                    <h3>{{ $category->name }}</h3>
                                </div>

                                <div class="posts-md">
                                    <div class="entry row mb-5">
                                        <div class="col-md-6">
                                            <div class="entry-image">
                                                <a href="#"><img src="{{ asset('images/magazine/7.jpg') }}"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3 mt-md-0">
                                            <div class="entry-title title-sm nott">
                                                <h3><a href="blog-single.html">Toyotas next minivan will let you shout at
                                                        your kids without turning around</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i>
                                                            21</a></li>
                                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content">
                                                <p class="mb-0">Asperiores, tenetur, blanditiis, quaerat odit ex
                                                    exercitationem pariatur quibusdam veritatis quisquam laboriosam esse
                                                    beatae hic perferendis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="posts-sm row col-mb-30">
                                    <div class="entry col-md-6">
                                        <div class="grid-inner row no-gutters">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="#"><img src="images/magazine/small/1.jpg" alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="col pl-3">
                                                <div class="entry-title">
                                                    <h4><a href="#">UK government weighs Tesla's Model S for its 5 million
                                                            electric vehicle fleet</a></h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="icon-calendar3"></i> 1st Aug 2021</li>
                                                        <li><a href="#"><i class="icon-comments"></i> 32</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="entry col-md-6">
                                        <div class="grid-inner row no-gutters">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="#"><img src="images/magazine/small/2.jpg" alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="col pl-3">
                                                <div class="entry-title">
                                                    <h4><a href="#">MIT's new robot glove can give you extra fingers</a>
                                                    </h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="icon-calendar3"></i> 13th Sep 2021</li>
                                                        <li><a href="#"><i class="icon-comments"></i> 11</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="entry col-md-6">
                                        <div class="grid-inner row no-gutters">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="#"><img src="images/magazine/small/3.jpg" alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="col pl-3">
                                                <div class="entry-title">
                                                    <h4><a href="#">You can now listen to headphones through your hoodie</a>
                                                    </h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="icon-calendar3"></i> 27th July 2021</li>
                                                        <li><a href="#"><i class="icon-comments"></i> 13</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="entry col-md-6">
                                        <div class="grid-inner row no-gutters">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="#"><img src="images/magazine/small/4.jpg" alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="col pl-3">
                                                <div class="entry-title">
                                                    <h4><a href="#">How would you change Kobo's Aura HD e-reader?</a></h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="icon-calendar3"></i> 31st Jan 2021</li>
                                                        <li><a href="#"><i class="icon-comments"></i> 7</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12">
                                <img src="{{ asset('images/magazine/ad.jpg') }}" alt="Ad" class="aligncenter my-0">
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section><!-- #content end -->
@endsection
