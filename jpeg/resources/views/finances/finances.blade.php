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

    <script src="{{ asset('js/utils.js') }}" charset="utf-8"></script>

    @include("finances.modal-expense")

    @include("finances.modal-receipt")

    @include("finances.modal-detail-expense", [
        "monthExpenses" => $monthExpenses
    ])

    @include("finances.modal-detail-receipt", [
        // "monthReceipts" => $monthReceipts
    ])

    <div class="container">
        <div class="row">
            <div class="text-secondary prefixed-title col-md-8 offset-md-2">
                <i class="material-icons prefix">monetization_on</i>
                <h1 class="title">Finanças</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a class="btn btn--secondary btn--full text-left" data-role="modal-trigger" modal-name="modal-detail-expense">
                    Gastos
                    <!-- <i class="material-icons suffix--not-clickable">chevron_right</i> -->
                    <div class="btn__suffix" data-role="format-as-money">
                        {{ $totalExpenses }}
                    </div>
                </a>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a class="btn btn--secondary btn--full text-left" data-role="modal-trigger" modal-name="modal-detail-receipt">
                    Recebimentos
                    <!-- <i class="material-icons suffix--not-clickable">chevron_right</i> -->
                    <div class="btn__suffix" data-role="format-as-money">
                        {{ $totalReceipts }}
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

    <script type="text/javascript">
        document.querySelectorAll("[data-role=format-as-money]").forEach(function (elem) {
            elem.innerHTML = Utils.formatAsMoney(elem.innerHTML);
        });
    </script>

    <script src="{{ asset('js/forms.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/modal.js') }}" charset="utf-8"></script>

@endsection
