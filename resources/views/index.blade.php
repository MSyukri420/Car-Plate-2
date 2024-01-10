<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="images/logo.png" type="">
    <title> CarPlate </title>
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

<body>
    <div class="hero_area">
        @include('navigation/navbar')
        <!-- slider section -->
        <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="bg-box">
                        <img src="images/carousel1.jpeg" alt="">
                    </div>
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box mt-5">
                                    <h1>Exclusive Carplate Designs</h1>
                                    <p>Discover our range of exclusive carplate designs that blend style with elegance. Elevate your vehicle's identity with our unique and custom carplates.</p>
                                    <div class="btn-box">
                                        <a href="https://wa.me/60138151535?text=Hello" class="btn1">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-box">
                        <img src="images/carousel3.jpeg" alt="">
                    </div>
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box mt-5">
                                    <h1>Customize Your Carplate</h1>
                                    <p>Make a personal statement with our customizable carplates. Choose from a variety of fonts, colors, and styles to create a carplate that reflects your personality.</p>
                                    <div class="btn-box">
                                        <a href="https://wa.me/60138151535?text=Hello" class="btn1">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-box">
                        <img src="images/carousel2.jpg" alt="">
                    </div>
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box carousel mt-5">
                                    <h1>Special Offers on Carplates</h1>
                                    <p>Grab the opportunity to own a distinctive carplate at an unbeatable price. Check out our special offers and find the perfect match for your vehicle today.</p>
                                    <div class="btn-box">
                                        <a href="https://wa.me/60138151535?text=Hello" class="btn1">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
        </section>
        <!-- end slider section -->
    </div>


    <!-- Third Section with Tabs -->
<section class="food_section pt-5 pb-4" id="car-plates">
    <div class="container" id="numberPlateContainer">
        <div class="heading_container heading_center mb-5">
            <h2>Our CarPlate</h2>
        </div>

        <!-- Centered Search Form -->
        <div class="row justify-content-center">
            <div class="input-group col-lg-6 col-md-8">
                <input type="text" id="searchCarPlate" name="searchCarPlate" value="{{ request('searchCarPlate') }}" placeholder="Search Car Plate..." class="form-control centered-placeholder" autocomplete="off">
            </div>
        </div>

        <div class="nav-wrapper position-relative end-0">
            <!-- Tab Navigation -->
            <ul class="nav filters_menu p-2" id="carPlateTabs" role="tablist">
                <li class="nav-item active nav-link mb-0 px-3 py-2" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" role="tab" aria-controls="all" aria-selected="true">
                    All Categories
                </li>
                <li class="nav-item nav-link mb-0 px-3 py-2" id="golden-tab" data-bs-toggle="tab" data-bs-target="#golden" role="tab" aria-controls="golden" aria-selected="false">
                    Golden Number
                </li>
                <li class="nav-item nav-link mb-0 px-3 py-2" id="twoDigit-tab" data-bs-toggle="tab" data-bs-target="#two-digit" role="tab" aria-controls="two-digit" aria-selected="false">
                    2 Digit
                </li>
                <li class="nav-item nav-link mb-0 px-3 py-2" id="threeDigit-tab" data-bs-toggle="tab" data-bs-target="#three-digit" role="tab" aria-controls="three-digit" aria-selected="false">
                    3 Digit
                </li>
                <li class="nav-item nav-link mb-0 px-3 py-2" id="fourDigit-tab" data-bs-toggle="tab" data-bs-target="#four-digit" role="tab" aria-controls="four-digit" aria-selected="false">
                    4 Digit
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content filters-content" id="tab-content">
        </div>

    </div>
</section>
<!-- End Third Section -->


    @include('navigation/floatButton')
@include('navigation/footer')



    <!-- jQery -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>



<script>
    var activeTab = 'all';

    $('.nav-link').on('click', function() {
        activeTab = $(this).attr('id').replace('-tab', '');
        fetchTabContentWithSearch('/car-plate/' + activeTab);
    });

    function fetchTabContentWithSearch(url) {
        const searchParams = new URLSearchParams({
            searchCarPlate: $('#searchCarPlate').val(),
            activeTab: activeTab
        });
        fetch(`${url}?${searchParams.toString()}`)
            .then(response => response.text())
            .then(html => {
                $('#tab-content').html(html);
            });
    }

    $(document).on('click', '.pagination-links a', function(event) {
        event.preventDefault();
        var pageUrl = new URL($(this).attr('href'));
        pageUrl.searchParams.set('searchCarPlate', $('#searchCarPlate').val());
        pageUrl.searchParams.set('activeTab', activeTab);

        fetchTabContentWithSearch(pageUrl.toString());
    });

    $(document).ready(function() {
        $('#all-tab').trigger('click');
        $('input[name="searchCarPlate"]').on('keyup', function() {
            var formData = {
                searchCarPlate: $('#searchCarPlate').val(),
                activeTab: activeTab
            };

            var url = '/car-plate/' + activeTab;

            // Update the tab content immediately after a search
            fetchTabContentWithSearch(url);
        });
    });


</script>
