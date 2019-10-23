<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> JPEG Eventos </title>

        <link rel="stylesheet" href="frontend/assets/css/index.css">
    </head>

    <body>
        <?php //include "frontend/views/side-menu.php" ?>

        <?php //include "frontend/views/client-register.php" ?>

        <?php //include "frontend/views/stock.php" ?>
        <?php //include "frontend/includes/schedule.php" ?>
        <?php //include "frontend/views/login.php" ?>
        <?php include "frontend/" ?>


        <?php '
        <br>

        <p>Secondary btn:</p>
        <a class="btn btn--secondary" href="#">button</a>
        <br>

        <p>Primary gradient btn:</p>
        <a class="btn btn--primary--gradient" href="#">button</a>
        <br>

        <p>Secondary gradient btn:</p>
        <a class="btn btn--secondary--gradient" href="#">button</a>
        <br>

        <?php //include "frontend/views/login.php"; ?>

        <form class="" action="index.html" method="post">
            <p>INPUT TYPE TEXT PRIMARY</p>

            <div class="form-group form-group--primary">
                <i class="material-icons">email</i>
                <input type="text" id="ex1">
                <label for="ex1">username</label>
            </div>

            <div class="form-group form-group--primary">
                <i class="material-icons">lock</i>
                <input type="password" id="ex2">
                <label for="ex2">password</label>
            </div>

            <p>INPUT TYPE TEXT SECONDARY</p>

            <div class="form-group form-group--secondary">
                <input type="text" id="ex3" value="">
                <label for="ex3">username</label>
            </div>
        </form>
        ' ?>

        <script src="frontend/assets/js/forms.js" charset="utf-8"></script>
        <!-- <script src="frontend/assets/js/calendar.js" charset="utf-8"></script> -->
    </body>
</html>
