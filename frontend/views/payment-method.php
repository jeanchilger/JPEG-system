<style media="screen">
    .client-register-container {
        text-align: center;
        padding: 0.5rem;
    }

    body {
        background-color: var(--primary);
    }

</style>

<i class="material-icons text-secondary" style="cursor: pointer;padding: 0.4rem;font-size: 2rem">keyboard_arrow_left</i>

<div class="container">
    <div class="row">
        <div class="text-secondary prefixed-title col-md-8 offset-md-2">
            <i class="material-icons prefix">monetization_on</i>
            <h1 class="title">Formas de Pagamento</h1>
        </div>

        <form class="col-12 col-md-8 offset-md-2" method="post">

            <div class="collection collection--primary collection--primary--outline" data-role="select">
                <div class="collection__item">
                    CARTÃO DE CRÉDITO
                    <i class="material-icons prefix">credit_card</i>
                </div>
                <div class="collection__item">
                    DINHEIRO
                    <i class="material-icons prefix">money</i>
                </div>
                <div class="collection__item">
                    BOLETO
                    <i class="material-icons prefix">receipt</i>
                </div>
            </div>

            <div class="form-group">
                <input type="number" name="value" id="value" min=0 data-role="input-number">
                <label for="value">Valor</label>
            </div>

            <div class="form-group">
                <input type="number" name="installment" id="installment" min=0 data-role="input-number">
                <label for="installment">Parcelas</label>
            </div>

            <button class="btn btn--secondary--gradient" type="submit" name="submit">
                Finalizar
            </button>


        </form>
    </div>
</div>

<script src="frontend/assets/js/forms.js" charset="utf-8"></script>
