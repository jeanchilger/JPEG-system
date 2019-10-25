<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> JPEG Eventos </title>

        <link rel="stylesheet" href="frontend/assets/css/index.css">
    </head>

    <body class="bg-secondary">
        <?php include "frontend/views/side-menu.php" ?>

        <?php //include "frontend/views/client-register.php" ?>

        <?php //include "frontend/views/stock.php" ?>
        <?php //include "frontend/views/login.php" ?>

        <style media="screen">
            .row:not(:first-child) {
                margin-top: 2rem;
            }

            img {
                width: 100%;
                height: auto;
            }
        </style>



        <div class="container">
            <!-- Finanças -->
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="text-primary prefixed-title text-center">
                        <i class="material-icons prefix">trending_up</i>
                        <h1 class="title"> Finanças </h1>
                    </div>
                    <img src="frontend/assets/img/chart.png" alt="Os gráficos serão gerados utilizando framework">
                </div>
            </div>
            <!-- Próximos pagamentos -->
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">

                    <div class="text-primary prefixed-title text-center">
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
                    <div class="text-primary prefixed-title text-center">
                        <i class="material-icons prefix">event</i>
                        <h1 class="title"> Agenda </h1>
                    </div>

                    <?php include "frontend/includes/schedule.php" ?>
                </div>
            </div>
        </div>

        <script src="frontend/assets/js/forms.js" charset="utf-8"></script>
    </body>
</html>
