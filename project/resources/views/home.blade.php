@extends("layouts.app")
@extends("includes.sidemenu")

@section("content")

    <style media="screen">
        .row:not(:first-child) {
            margin-top: 2rem;
        }

        img {
            width: 100%;
            height: auto;
        }

        body {
            background-color: var(--secondary);
        }
    </style>

    <script src="{{ asset('js/calendar.js') }}" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="{{ asset('js/profit-chart.js') }}" charset="utf-8"></script>


    <div class="container">
        <!-- Finanças -->
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="text-primary prefixed-title">
                    <i class="material-icons prefix">trending_up</i>
                    <h1 class="title"> Finanças </h1>
                </div>

                <canvas id="profitChart"></canvas>
                <script type="text/javascript">
                    let profitChart = new ProfitChart("profitChart");
                    profitChart.buildChart(@json($expensesPerWeek), @json($receiptsPerWeek));
                </script>
            </div>
        </div>
        <!-- Próximos pagamentos -->
        {{-- <div class="row">
            <div class="col-12 col-md-8 offset-md-2">

                <div class="text-primary prefixed-title">
                    <i class="material-icons prefix">credit_card</i>
                    <h1 class="title"> Próximos pagamentos </h1>
                </div>
                <div class="collection collection--primary">
                    <div class="collection__item">
                        James Richardson
                        <i class="material-icons suffix">message</i>
                    </div>
                    <div class="collection__item">
                        Madeline Kennedy
                        <i class="material-icons suffix">message</i>
                    </div>
                    <div class="collection__item">
                        Anna Coleman
                        <i class="material-icons suffix">message</i>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Agenda -->
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="text-primary prefixed-title">
                    <i class="material-icons prefix">event</i>
                    <h1 class="title"> Agenda </h1>
                </div>

                <div class="calendar calendar--primary" id="calendar">
                </div>

                <script type="text/javascript">
                    var calendar = new Calendar();

                    let currentDate = new Date();
                    let month = currentDate.getMonth();
                    let year = currentDate.getFullYear();

                    let firstDay = new Date(year, month, 1).getDay();
                    let maxDays = new Date(year, month + 1, 0).getDate();

                    calendar.fillMissingDays(firstDay);
                    calendar.fillCalendarDays(maxDays);
                </script>
            </div>
        </div>
    </div>

    @foreach($events as $event)
        <script type="text/javascript">
            calendar.insertEvent("{{ $event -> date }}");
        </script>
    @endforeach


@endsection
