@extends("layouts.app")

@section("content")

    <style media="screen">
        .row:not(:first-child) {
            margin-top: 2rem;
        }

        body {
            padding-top: 1rem;
            background-color: var(--secondary);
        }
    </style>

    <div class="modal modal--secondary" id="modal">
        <div class="modal__header">
            <h1 class="modal__title--prefixed">
                <i class="material-icons">event</i>
                novo evento
            </h1>
        </div>

        <div class="modal__body">
            <form action="{{ route('event.store') }}" method="POST">
                @csrf
                <!-- event name field -->
                <div class="form-group form-group--primary">
                    <i class="material-icons">edit</i>
                    <input type="text" id="name" name="name">
                    <label for="name">Nome do Evento</label>
                </div>

                <!-- Event location -->
                <div class="form-group form-group--primary">
                    <i class="material-icons">room</i>
                    <input type="text" id="location" name="location">
                    <label for="location">Local</label>
                </div>

                <!-- Event date -->
                <div class="form-group form-group--primary">
                    <i class="material-icons">calendar_today</i>
                    <input type="text" id="date" name="date" data-role="date" pattern="\d{1,2}/\d{1,2}/\d{4}" maxlength="10">
                    <label for="date">Data</label>
                </div>

                <!-- Event time -->
                <div class="form-group form-group--primary">
                    <i class="material-icons">alarm</i>
                    <input type="text" id="time" name="time" data-role="time" pattern="\d{1,2}:\d{1,2}" maxlength="5">
                    <label for="time">Hora</label>
                </div>

                <!-- event people quantity -->
                <div class="form-group form-group--primary">

                    <input type="number" id="people" name="people" data-role="input-number">

                    <label for="people">Total de pessoas</label>
                </div>

                <input type="submit" name="save" value="salvar" class="btn btn--primary--gradient">

            </form>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="text-primary prefixed-title">
                    <i class="material-icons prefix">class</i>
                    <h1 class="title"> Agenda </h1>
                </div>

                <div class="calendar calendar--primary" id="calendar">
                </div>

                <a class="btn btn--primary--gradient btn--float" href="#" id="modal-trigger">
                    <i class="material-icons">add_circle</i>
                    Evento
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">

                <div class="text-primary prefixed-title">
                    <i class="material-icons prefix">school</i>
                    <h1 class="title"> Eventos futuros </h1>
                </div>

                <div class="collapsible collapsible--primary" id="collapsible">
                    <div class="collapsible__item">
                        <div class="collapsible__header">
                            <i class="material-icons prefix">school</i>
                            Formatura Psicologia
                        </div>
                        <div class="collapsible__body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <div class="collapsible__item">
                        <div class="collapsible__header">
                            <i class="material-icons prefix">school</i>
                            Formatura Eng. Civil
                        </div>
                        <div class="collapsible__body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-overlay">

    </div>

    <script src="{{ asset('js/forms.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/modal.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/calendar.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/collapsible.js') }}" charset="utf-8"></script>

@endsection
