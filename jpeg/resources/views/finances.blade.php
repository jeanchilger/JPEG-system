@extends("layout")

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

    <div class="container">
        <div class="row">
            <div class="text-secondary prefixed-title col-md-8 offset-md-2">
                <i class="material-icons prefix">monetization_on</i>
                <h1 class="title">Finanças</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="collection collection--secondary collection--ghost">
                    <div class="collection__item">
                        Gastos
                        <i class="material-icons suffix">chevron_right</i>
                        <div class="suffix">
                            R$1.234,50
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="collection collection--secondary collection--ghost">
                    <div class="collection__item">
                        Recebimentos
                        <i class="material-icons suffix">chevron_right</i>
                        <div class="suffix">
                            R$1.234,50
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 offset-md-2">
                <div class="collection collection--secondary collection--ghost">
                    <div class="collection__item">
                        NOVO GASTO
                        <i class="material-icons suffix">chevron_right</i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="collection collection--secondary collection--ghost">
                    <div class="collection__item">
                        NOVO RECEBIMENTO
                        <i class="material-icons suffix">chevron_right</i>
                    </div>
                </div>
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

@endsection
