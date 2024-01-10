<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="images/logo.png" type="">
    <title> About Us </title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>


<body class="sub_page">

    @include('navigation/navbar')

  <!-- about section -->

    <section class="about_section p-5">
        <div class="container  ">

        <div class="row">
            <div class="col-md-6 ">
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                    <h2>
                        Our Craft, Your Identity
                    </h2>
                    </div>
                    <p>
                        Crafting distinct car plates with a blend of art and innovation. Your satisfaction, our promise.
                    </p>
                    <a href="#mission-vision">
                    Read More
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>

  <!-- end about section -->

    <!-- Third Section-->
    <section class="mission-vision-section py-5" id="mission-vision">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2>Our Mission and Vision</h2>
                    <p class="lead">Shaping the future of car plate customization with excellence and creativity.</p>
                </div>
            </div>
            <div class="row mt-3">
                <!-- Original Mission Statement -->
                <div class="col-md-6 mb-4">
                    <div class="card mission-card">
                        <div class="card-body">
                            <h3>Mission Statement</h3>
                            <p>Our mission is to redefine the car plate industry by providing innovative products that showcase customers' unique identities.</p>
                        </div>
                    </div>
                </div>
                <!-- Original Vision Statement -->
                <div class="col-md-6 mb-4">
                    <div class="card vision-card">
                        <div class="card-body">
                            <h3>Vision for the Future</h3>
                            <p>Our vision is to be the global leader in car plate customization, recognized for our creativity, quality, and sustainability.</p>
                        </div>
                    </div>
                </div>
                <!-- New Mission Statement 1 -->
                <div class="col-md-6 mb-4">
                    <div class="card mission-card">
                        <div class="card-body">
                            <h3>Customer Experience</h3>
                            <p>Enhancing the customer experience with personalized service and support, ensuring satisfaction at every touchpoint.</p>
                        </div>
                    </div>
                </div>
                <!-- New Mission Statement 2 -->
                <div class="col-md-6 mb-4">
                    <div class="card vision-card">
                        <div class="card-body">
                            <h3>Innovation and Design</h3>
                            <p>Continuously innovating in design and technology to create car plates that are not only identifiers but also works of art.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Third Section -->

<!-- client section -->
<section class="client_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container heading_center psudo_white_primary mb_45">
            <h2>
                What Our Customers Say
            </h2>
        </div>
        <div class="carousel-wrap row ">
            <div class="owl-carousel client_owl-carousel">
                <div class="item">
                    <div class="box">
                        <div class="detail-box">
                            <p>
                                "I was absolutely thrilled with the custom car plate I received. The quality exceeded my expectations and it adds a unique touch to my vehicle. The service was top-notch, and the design team was incredibly helpful in bringing my vision to life."
                            </p>
                            <h6>
                                Jordan Smith
                            </h6>
                            <p>
                                Car Enthusiast
                            </p>
                        </div>
                        <div class="img-box">
                            <img src="images/client1.jpg" alt="" class="box-img">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="detail-box">
                            <p>
                                "Finding a distinctive and legally compliant car plate was made easy by this company. Their attention to detail and commitment to quality is evident in the final product. Highly recommend them to any car owner looking for that special touch."
                            </p>
                            <h6>
                                Emily Rios
                            </h6>
                            <p>
                                Classic Car Collector
                            </p>
                        </div>
                        <div class="img-box">
                            <img src="images/client2.jpg" alt="" class="box-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end client section -->

  @include('navigation/floatButton')
@include('navigation/footer')

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>


<script>
    $(document).ready(function(){
        $('.read-more-button').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $('#mission-vision').offset().top
            }, 'slow');
        });
    });
</script>
