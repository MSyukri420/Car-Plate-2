@section('content')
<div id="search-content" class="filters-content food-section">
    <div class="row grid">
        @foreach ($results as $cp)
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3 all burger">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('images/car.png') }}" class="card-img-top img-fluid" alt="Car Plate 1">
                        <div class="car-plate"
                            data-alphabet-start="{{ $cp->alphabet_start }}"
                            data-alphabet-end="{{ $cp->alphabet_end }}"
                            data-number="{{ $cp->number }}"
                            data-carplate="{{ $cp->carplate }}">
                            {{ strtoupper($cp->carplate) }}
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="options">
                            <h5 class="card-title">RM{{ number_format($cp->price) }}</h5>
                            <a href="https://wa.me/60138151535?text=I%20want%20to%20buy%20this%20carplate%20-%20{{ $cp->carplate }}" class="btn bg-gradient-info p-0 d-md-inline-block" target="_blank">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12">
            <div class="pagination-container">
                <p>Total Carplates: {{ $results->total() }}</p>
                @if ($results->count() > 0)
                    <nav>
                        <ul class="pagination">
                            <!-- Previous Page Link -->
                            @if ($results->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $results->previousPageUrl() }}" rel="prev" aria-label="Previous" onclick="fetchTabContent(event, '{{ $results->previousPageUrl() }}')">&laquo;</a>
                                </li>
                            @endif

                            <!-- Pagination Elements -->
                            @php
                                $start = max($results->currentPage() - 2, 1);
                                $end = min(max(5, $results->currentPage() + 2), $results->lastPage());
                            @endphp
                            @for ($i = $start; $i <= $end; $i++)
                                @if ($i == $results->currentPage())
                                    <li class="page-item active" aria-current="page"><span class="page-link">{{ $i }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $results->url($i) }}" onclick="fetchTabContent(event, '{{ $results->url($i) }}')">{{ $i }}</a></li>
                                @endif
                            @endfor

                            <!-- Next Page Link -->
                            @if ($results->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $results->nextPageUrl() }}" rel="next" aria-label="Next" onclick="fetchTabContent(event, '{{ $results->nextPageUrl() }}')">&raquo;</a>
                                </li>
                            @else
                                <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                            @endif
                        </ul>
                    </nav>
                @else
                    <p>No results</p>
                @endif
            </div>
        </div>
    </div>

</div>


    <script>
        function fetchTabContent(event, url) {
            event.preventDefault();
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('tab-content').innerHTML = html;
                });
        }

        $(document).ready(function() {
            // Bind click event to pagination links
            $(document).on('click', '.pagination-links a', function(event) {
                event.preventDefault();
                var url = $(this).attr('href');
                fetchTabContent(url);
            });
        });

    </script>

