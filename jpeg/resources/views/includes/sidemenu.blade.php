@section("side-menu")

    <style media="screen">
        #sidenav-trigger {
            cursor: pointer;
            user-select: none;
            padding: 0.5rem;
        }
    </style>

    <div class="sidenav sidenav--secondary" id="sidenav">
        <i class="sidenav__close material-icons" id="sidenav-close">close</i>
        <h1 class="sidenav__logo">LOGO</h1>

        <div class="sidenav__nav">
            {{-- <a class="sidenav__nav__link" href="route('clients')">Cadastro de clientes</a> --}}
            {{-- <a class="sidenav__nav__link" href="#"> Boletos </a> --}}
            <a class="sidenav__nav__link" href="{{ route('schedule') }}"> Agenda </a>
            {{-- <a class="sidenav__nav__link" href="#"> Estoque </a> --}}
            <a class="sidenav__nav__link" href="{{ route('finances') }}"> Finanças </a>
        </div>
    </div>

    <i class="material-icons text-primary" id="sidenav-trigger">menu</i>

    <script src="{{ asset('js/sidenav.js') }}" charset="utf-8"></script>

@endsection
