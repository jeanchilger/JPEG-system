@extends("layouts.app")

@section("content")

    <style media="screen">
        .row:not(:first-child) {
            margin-top: 2rem;
        }

        body {
            padding-top: 1rem;
            background-color: var(--primary);
        }
    </style>

    <div class="modal modal--primary" id="modal-expense">
        <div class="modal__header">
            <h1 class="modal__title--prefixed">
                <i class="material-icons">monetization_on</i>
                Nova Despesa
            </h1>
        </div>

        <div class="modal__body">
            <form action="{{ route('expense.store') }}" method="POST">
                @csrf
                <!-- Expense value field -->
                <div class="form-group form-group--secondary">
                    <input type="text" id="value" name="value" data-role="input-number">
                    <label for="value">Valor da Despesa</label>
                </div>

                <!-- Expense date -->
                <div class="form-group form-group--secondary">
                    <i class="material-icons">calendar_today</i>
                    <input type="text" id="date" name="date" data-role="date" pattern="\d{1,2}/\d{1,2}/\d{4}" maxlength="10">
                    <label for="date">Data</label>
                </div>

                <!-- Expense category -->
                <div class="form-group form-group--secondary">
                    <i class="material-icons">category</i>
                    <input type="text" id="category" name="category">
                    <label for="category">Categoria</label>
                </div>

                <!-- Expense description -->
                <div class="form-group form-group--secondary">
                    <i class="material-icons">description</i>
                    <textarea name="description" id="description"></textarea>
                    <label for="description">Descrição (opcional)</label>
                </div>

                <input type="submit" name="save" value="salvar" class="btn btn--secondary--gradient btn--full">

            </form>
        </div>
    </div>

    <div class="modal modal--primary" id="modal-receipt">
        <div class="modal__header">
            <h1 class="modal__title--prefixed">
                <i class="material-icons">monetization_on</i>
                Novo Recebimento
            </h1>
        </div>

        <div class="modal__body">
            <form action="{{ route('receipt.store') }}" method="POST">
                @csrf
                <!-- Receipt value field -->
                <div class="form-group form-group--secondary">
                    <input type="text" id="value" name="value" data-role="input-number">
                    <label for="value">Valor da Despesa</label>
                </div>

                <!-- Receipt date -->
                <div class="form-group form-group--secondary">
                    <i class="material-icons">calendar_today</i>
                    <input type="text" id="date" name="date" data-role="date" pattern="\d{1,2}/\d{1,2}/\d{4}" maxlength="10">
                    <label for="date">Data</label>
                </div>

                <!-- Receipt category -->
                <div class="form-group form-group--secondary">
                    <i class="material-icons">category</i>
                    <input type="text" id="category" name="category">
                    <label for="category">Categoria</label>
                </div>

                <!-- Receipt description -->
                <div class="form-group form-group--secondary">
                    <i class="material-icons">description</i>
                    <textarea name="description" id="description"></textarea>
                    <label for="description">Descrição (opcional)</label>
                </div>

                <input type="submit" name="save" value="salvar" class="btn btn--secondary--gradient btn--full">

            </form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="text-secondary prefixed-title col-md-8 offset-md-2">
                <i class="material-icons prefix">monetization_on</i>
                <h1 class="title">Finanças</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a class="btn btn--secondary btn--full text-left">
                    Gastos
                    <!-- <i class="material-icons suffix--not-clickable">chevron_right</i> -->
                    <div class="btn__suffix">
                        R$ {{ $totalExpenses }},00
                    </div>
                </a>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a class="btn btn--secondary btn--full text-left">
                    Recebimentos
                    <!-- <i class="material-icons suffix--not-clickable">chevron_right</i> -->
                    <div class="btn__suffix">
                        R$ {{ $totalReceipts }},00
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 offset-md-2">
                <a class="btn btn--secondary btn--full text-left" data-role="modal-trigger" modal-name="modal-expense">
                    NOVO GASTO
                    <i class="material-icons btn__suffix">add</i>
                </a>
            </div>
            <div class="col-md-4">
                <a class="btn btn--secondary btn--full text-left" data-role="modal-trigger" modal-name="modal-receipt">
                    NOVO RECEBIMENTO
                    <i class="material-icons btn__suffix">add</i>
                </a>
            </div>

        </div>

        <div class="row">
            <div class="text-secondary prefixed-title col-md-8 offset-md-2">
                <i class="material-icons prefix">poll</i>
                <h1 class="title">Estatísticas</h1>
            </div>

            <div class="col-md-8 offset-md-2">
                <div class="collection collection--secondary">
                    <div class="collection__item">
                        PREVISTO
                        <div class="suffix">R$5.237,53</div>
                    </div>

                    <div class="collection__item">
                        RECEBIDO
                        <div class="suffix">R$3.128,43</div>
                    </div>

                    <div class="collection__item">
                        <div class="collection__left">
                            N° BOLETOS: 124
                        </div>

                        <div class="collection__right">
                            VENCIDOS: 32
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/forms.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/modal.js') }}" charset="utf-8"></script>

@endsection
