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



<div class="container">
    <!-- Finanças -->
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="text-primary prefixed-title">
                <i class="material-icons prefix">trending_up</i>
                <h1 class="title"> Finanças </h1>
            </div>
            <img src="frontend/assets/img/chart.png" alt="Os gráficos serão gerados utilizando framework">
        </div>
    </div>
    <!-- Próximos pagamentos -->
    <div class="row">
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
    </div>
    <!-- Agenda -->
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="text-primary prefixed-title">
                <i class="material-icons prefix">event</i>
                <h1 class="title"> Agenda </h1>
            </div>

            <div class="calendar calendar--primary" id="calendar">
            </div>

        </div>
    </div>
</div>

<script src="frontend/assets/js/calendar.js" charset="utf-8"></script>
