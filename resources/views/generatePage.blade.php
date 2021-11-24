@extends('layout.template')

 @section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">

     <form method="GET" action="#about">
         <button class="buttonClick" type="submit" >CLICK HERE</button>
     </form>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
          <center><form action="">
            <textarea id="Strings" name="Strings"
            rows="20" cols="100">
  </textarea>

          </form>
          </center>
      </div>
    </section><!-- End About Section -->


@stop




