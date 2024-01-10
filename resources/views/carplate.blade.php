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

<body class="sub_page">

@include('navigation/navbar')

<!-- Third Section with Tabs -->
<section class="food_section pt-5 pb-4" id="car-plates">
    <div class="container" id="numberPlateContainer">
        <!-- Centered Search Form -->
        <div class="row justify-content-center">
            <form action="{{ url('/car-plate') }}" method="GET" class="col-lg-6 col-md-8">
                <div class="input-group">
                    <input type="text" id="searchCarPlate" name="searchCarPlate" value="{{ request('searchCarPlate') }}" placeholder="Search Car Plate..." class="form-control centered-placeholder" autocomplete="off">
                </div>
            </form>
        </div>

        <div class="nav-wrapper position-relative end-0 pb-1">
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
