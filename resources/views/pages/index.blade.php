@extends('layouts.master')

@section('content')
    <header>
        <div id="header" class="header-content">
            <div class="header-content-inner">
                <h1>Rain in style. Make a splash with beautiful wellies.</h1>
                <hr>
                <p></p>
                <a href="#ourstory" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section id="ourstory">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Story</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-muted">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum maxime modi omnis veritatis. Aspernatur at corporis, doloremque ea ipsa maxime molestiae nesciunt, non optio porro quas quisquam reiciendis sapiente temporibus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet atque corporis laborum nam possimus quaerat sapiente sint voluptates. Adipisci aspernatur cumque explicabo nam repellat repudiandae sapiente sed similique sit?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="styles">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Polka Dot
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Stripes
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Tartan
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Hearts
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Leopard
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Flowers
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="wheretobuy">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Where To Buy</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <a href="http://etsy.com/uk" class="panel">
                        <div class="service-box">
                            {{--<i class="fa fa-4x fa-tint wow bounceIn text-primary"></i>--}}
                            <p class="btn btn-primary btn-xl btn-buy animated fadeInRight">Etsy</p>
                            {{--<p class="text-muted"></p>--}}
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <a href="http://amazon.co.uk" class="panel">
                        <div class="service-box">
                            {{--<i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>--}}
                            <p class="btn btn-primary btn-xl btn-buy animated fadeInUp">Amazon</p>
                            {{--<p class="text-muted">You can use this theme as is, or you can make changes!</p>--}}
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <a href="http://ebay.com/" class="panel">
                        <div class="service-box">
                            {{--<i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>--}}
                            <p class="btn btn-primary btn-xl btn-buy animated fadeInLeft">eBay</p>
                            {{--<p class="text-muted">We update dependencies to keep things fresh.</p>--}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Get In Touch!</h2>
                    <hr class="light">
                    <p>Have a question? Give us a call or send us an email and we'll endeavour to get back to you as quick as we can.</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>+44 (0) 1206 123 456</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:info@wellingtonbare.com" class="light">info@wellingtonbare.com</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
