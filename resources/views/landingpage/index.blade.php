@extends('landingpage.layouts.main')

@section('landingpage-container')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Style -->
        <link rel="stylesheet" href="css/home.css">

        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Noto+Sans+JP:wght@900&display=swap"
            rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    </head>

    <body>
        <!-- Banner -->
        <div class="banner" id="banner">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-15 col-lg-6 my-auto">
                        <h1 class="banner-titles">
                            Online <br> <span>Courses</span>
                        </h1>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, provident!
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, officia.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, expedita.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, placeat!
                        </p>
                        <a href="" class="btn mt-2 mb-2 btn-start">Join Us</a>
                        <button type="button" class="btn btn-outline-primary p">Learn More</button>
                        </form>
                    </div>
                    <div class="col-10 col-lg-6 my-6">
                        <img src="img/banner.png" alt="banner-images" class="banner-images">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->

        <!-- Selection-->
        <div class="selection">
            <div class="container">
                <div class="row d-flex justify-content-center">

                    <div class="card-columns">

                        <div class="col-md-12">
                            <div class="card">
                                <img src="img/clock.jpg" alt="images" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-titles">Evaluation Time</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, blanditiis!
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate praesentium
                                        expedita eius.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <img src="img/certificate.jpg" alt="images" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-titles">Certified Teacher</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, blanditiis!
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate praesentium
                                        expedita eius.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <img src="img/alerts.png" alt="images" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-titles">Video Playlist</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, blanditiis!
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate praesentium
                                        expedita eius.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Selection-->

        <!-- Article -->
        <div class="article">
            <div class="container">
                <div class="article-intro">
                    <h2 class="text-center">Latest Article</h2>
                    <p class="text-center">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis minus deserunt debitis.
                    </p>
                </div>

                <div class="row article-list">

                    <div class="col-sm-6 col-md-4 item">
                        <img src="img/article.png" alt="images" class="img-fluid">
                        <h3 class="article-titles">Article Titles</h3>
                        <p class="article-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, repudiandae!
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </p>
                        <a href="" class="article-action">
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 item">
                        <img src="img/article.png" alt="images-article" class="img-fluid">
                        <h3 class="article-titles">Article Titles</h3>
                        <p class="article-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, repudiandae!
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </p>
                        <a href="" class="article-action">
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 item">
                        <img src="img/article.png" alt="images-article" class="img-fluid">
                        <h3 class="article-titles">Article Titles</h3>
                        <p class="article-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, repudiandae!
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </p>
                        <a href="" class="article-action">
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Article -->

        <!-- Testimonial -->
        <div class="test" id="test">
            <div class="container">
                <div class="test-intro">
                    <h2 class="text-center">Testimonial</h2>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quod.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, dolor!
                        Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, sint.
                    </p>
                </div>

                <div class="row people">

                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <img src="img/avatar-1.png" alt="images-avatar" class="rounded-circle">
                            <br></br>
                            <h3 class="test-name">Asril</h3>
                            <p class="test-job">Mahasiswa</p>
                            <p class="test-description">
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quaerat!
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi quos vitae accusantium.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <img src="img/avatar-2.png" alt="images-avatar" class="rounded-circle">
                            <br></br>
                            <h3 class="test-name">Agam</h3>
                            <p class="test-job">Mahasiswa</p>
                            <p class="test-description">
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quaerat!
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi quos vitae accusantium.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <img src="img/avatar-3.png" alt="images-avatar" class="rounded-circle">
                            <br></br>
                            <h3 class="test-name">Putri</h3>
                            <p class="test-job">Mahasiswi</p>
                            <p class="test-description">
                                Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quaerat!
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi quos vitae accusantium.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Testimonial -->

        <!--Contact-->
        <div class="subscribe">
            <div class="container">
                <div class="subscribe-intro">
                    <h2 class="text-center">Contact <br>Subscribe For More Information.</br></h2>
                    <p class="text-center">
                        Problems trying to resolve the conflict between<br>the two major realms of Classical physics:
                        Newtonian
                        mechanics</br>
                    </p>
                </div>
                <form action="" class="form-inline">
                    <div class="form-group"><input type="email" class="form-control" placeholder="Your Email"></div>
                    <div class="form-group"><button class="btn-start" type="submit">Subscribe</button></div>
                </form>
            </div>
        </div>
        <!-- End Contact-->
    </body>

    </html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/2468ec86a4.js" crossorigin="anonymous"></script>

    <body>
    @endsection
