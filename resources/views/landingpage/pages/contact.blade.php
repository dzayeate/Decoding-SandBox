@extends('landingpage.layouts.main')

@section('landingpage-container')
    <!--Contact-->
    <div class="subscribe">
        <div class="container">
            <br></br>
            <div class="subscribe-intro">
                <h2 class="text-center">Contact Us </h2>
                <h2 class="text-center">Have any questions? We'd love to hear from you.</h2>
            </div>

            <!-- Filled Start -->
            <section class="scroll-section" id="filled">
                <br></br>
                <div class="card mb-5 row col-6 ">
                    <div class="card-body">
                        <div class="justify-content-center">
                            <form class="align-item-center">
                                <div class="mb-3 filled">
                                    <i data-acorn-icon="at-sign"></i>
                                    <input class="form-control" placeholder="Email" />
                                </div>
                                <div class="mb-3 filled">
                                    <i data-acorn-icon="user"></i>
                                    <input class="form-control" type="nama" placeholder="Nama" />
                                </div>
                                <div class="mb-3 filled">
                                    <i data-acorn-icon="mic"></i>
                                    <input class="form-control" type="telepon" placeholder="Telepon" />
                                </div>
                                <div class="mb-3 filled">
                                    <textarea placeholder="Pesan" class="form-control" rows="2"></textarea>
                                    <i data-acorn-icon="inbox"></i>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Filled End -->
        @endsection
