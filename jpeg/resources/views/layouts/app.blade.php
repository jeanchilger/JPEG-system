<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>JPEG Eventos</title>

        <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css">

        <script src="{{ asset('js/utils.js') }}" charset="utf-8"></script>
    </head>

    <body>
        @yield("side-menu")

        @yield("content")

        <!-- <script src="{{ asset('js/forms.js') }}" charset="utf-8"></script> -->
    </body>
</html>
