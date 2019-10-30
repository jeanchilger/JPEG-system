<style media="screen">
    .row:not(:first-child) {
        margin-top: 2rem;
    }

    body {
        padding-top: 1rem;
        background-color: var(--secondary);
    }

</style>

<i class="material-icons text-primary" style="cursor: pointer;padding: 0.4rem;font-size: 2rem">keyboard_arrow_left</i>

<div class="modal modal--secondary" id="modal">
    <div class="modal__header">
        <h1 class="modal__title--prefixed">
            <i class="material-icons">event</i>
            editar evento
        </h1>
    </div>

    <div class="modal__body">
        <form action="" method="post">
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
                <input type="text" id="date" name="date" data-role="date">
                <label for="date">Data</label>
            </div>

            <!-- Event time -->
            <div class="form-group form-group--primary">
                <i class="material-icons">alarm</i>
                <input type="text" id="time" name="time" data-role="time">
                <label for="time">Hora</label>
            </div>

            <!-- event people quantity -->
            <div class="form-group form-group--primary">

                <input type="number" id="eventPeople" name="eventPeople" data-role="input-number">

                <label for="eventPeople">Total de pessoas</label>
            </div>

            <input type="submit" name="save" value="salvar" class="btn btn--primary--gradient">

        </form>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="text-primary prefixed-title col-md-8 offset-md-2">
            <i class="material-icons prefix">chrome_reader_mode</i>
            <h1 class="title">Lista de Materiais</h1>
        </div>

        <div class="col-md-8 offset-md-2">

            <div class="collection collection--secondary collection--ghost">
                <div class="collection__item">
                    Flores
                    <i class="material-icons suffix" data-role="modal-trigger">edit</i>
                    <div class="suffix">
                        &nbsp;
                    </div>
                    <i class="material-icons suffix">delete</i>
                </div>

                <div class="collection__item">
                    Quadros
                    <i class="material-icons suffix" data-role="modal-trigger">edit</i>
                    <div class="suffix">
                        &nbsp;
                    </div>
                    <i class="material-icons suffix">delete</i>
                </div>

                <div class="collection__item">
                    Lembrancinhas
                    <i class="material-icons suffix" data-role="modal-trigger">edit</i>
                    <div class="suffix">
                        &nbsp;
                    </div>
                    <i class="material-icons suffix">delete</i>
                </div>

                <div class="collection__item">
                    Convites
                    <i class="material-icons suffix" data-role="modal-trigger">edit</i>
                    <div class="suffix">
                        &nbsp;
                    </div>
                    <i class="material-icons suffix">delete</i>
                </div>

                <div class="collection__item">
                    Papel Gossy
                    <i class="material-icons suffix" data-role="modal-trigger">edit</i>
                    <div class="suffix">
                        &nbsp;
                    </div>
                    <i class="material-icons suffix">delete</i>
                </div>
            </div>
        </div>


    </div>

</div>

<div id="modal-overlay">

</div>

<script src="frontend/assets/js/forms.js" charset="utf-8"></script>
<script src="frontend/assets/js/modal.js" charset="utf-8"></script>
<script src="frontend/assets/js/calendar.js" charset="utf-8"></script>
<script src="frontend/assets/js/collapsible.js" charset="utf-8"></script>
