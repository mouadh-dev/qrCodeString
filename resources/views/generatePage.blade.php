@extends('layout.template')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">

            <form method="GET" action="#about">
                <button class="buttonClick" type="submit">CLICK HERE</button>
            </form>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= generate Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <center>
                    <form action="/generate_qrcodes" method="POST">
                        @csrf
                        <textarea id="strings" name="strings" rows="20" cols="100"></textarea>
                        <br>
                        <button type="submit">generate</button>
                    </form>
                </center>
            </div>
        </section>
        <!-- End generate Section -->
    @stop
