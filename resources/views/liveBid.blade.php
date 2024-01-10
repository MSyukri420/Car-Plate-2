<!doctype html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="images/logo.png" type="">
    <title> Contact Us </title>
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

    <section class="liveBid my-5 mx-2">
        <div class="container ">
            <div class="row heading">
                <div class="col-md-8 mx-auto mt-5">
                    <div class="text-center">
                        <h1>Live Bid Plate</h1>
                        <p>Provided information on Malaysia's latest live bid vehicle registration number details.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 p-0">
                    <!-- Display Live Plate Items Here as a Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>State</th>
                                    <th>Alphabet Start</th>
                                    <th>Alphabet End</th>
                                    <th>End Date</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($livePlates as $livePlate)
                                    <tr>
                                        <td>{{ $livePlate->state }}</td>
                                        <td>{{ $livePlate->alphabet_start }}</td>
                                        <td>{{ $livePlate->alphabet_end }}</td>
                                        <td>{{ $livePlate->end_date }}</td>
                                        <td><span id="duration_{{ $livePlate->id }}">{{ $livePlate->duration }}</span></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('navigation/floatButton')
@include('navigation/footer')
</body>

</html>


<script>
    // Function to update the duration
    function updateDuration() {
        @foreach ($livePlates as $livePlate)
            // Calculate the remaining time in seconds
            var remainingTime_{{ $livePlate->id }} = new Date("{{ $livePlate->end_date }}").getTime() - new Date().getTime();
            var hours_{{ $livePlate->id }} = Math.floor(remainingTime_{{ $livePlate->id }} / (1000 * 60 * 60));
            var minutes_{{ $livePlate->id }} = Math.floor((remainingTime_{{ $livePlate->id }} % (1000 * 60 * 60)) / (1000 * 60));
            var seconds_{{ $livePlate->id }} = Math.floor((remainingTime_{{ $livePlate->id }} % (1000 * 60)) / 1000);

            // Update the displayed duration
            var durationText_{{ $livePlate->id }} = hours_{{ $livePlate->id }} + " : " + minutes_{{ $livePlate->id }} + " : " + seconds_{{ $livePlate->id }} ;

            var durationElement_{{ $livePlate->id }} = document.getElementById("duration_{{ $livePlate->id }}");

            if (durationElement_{{ $livePlate->id }}) {
                if (remainingTime_{{ $livePlate->id }} <= 0) {
                    // If remaining time is zero or negative, remove the row
                    var row_{{ $livePlate->id }} = durationElement_{{ $livePlate->id }}.closest("tr");
                    if (row_{{ $livePlate->id }}) {
                        row_{{ $livePlate->id }}.remove();
                    }
                } else {
                    // Update the duration text
                    durationElement_{{ $livePlate->id }}.innerHTML = durationText_{{ $livePlate->id }};
                }
            }
        @endforeach
    }

    // Update the duration every second (1000 milliseconds)
    setInterval(updateDuration, 1000);

    // Initial update
    updateDuration();
</script>
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

