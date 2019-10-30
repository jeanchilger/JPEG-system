<style media="screen">
    body {
        background-color: var(--primary);
        padding-top: 1rem;
    }

    .row:not(:first-child) {
        margin-top: 1rem;
    }
</style>

<div class="modal modal--secondary" id="modal">
    <div class="modal__header">
        <h1 class="modal__title--prefixed">
            <i class="material-icons">add_circle</i>
            novo material
        </h1>
    </div>

    <div class="modal__body">
        <form action="" method="post">
            <!-- product name field -->
            <div class="form-group form-group--primary">
                <i class="material-icons">edit</i>
                <input type="text" id="name" name="name">
                <label for="name">nome</label>
            </div>

            <!-- product quantity field -->
            <div class="form-group form-group--primary">
                <input type="number" id="quantity" name="quantity" min=1 data-role="input-number">
                <label for="quantity">quantidade</label>
            </div>

            <!-- product quantity field -->
            <div class="form-group form-group--primary">
                <input type="number" id="minQuantity" name="minQuantity" min=1 data-role="input-number">
                <label for="minQuantity">quantidade mínima</label>
            </div>

            <!-- product comments -->
            <div class="form-group form-group--primary">
                <i class="material-icons">announcement</i>
                <textarea id="comments"></textarea>
                <label for="comments">Observações</label>
            </div>

            <input type="submit" name="save" value="salvar" class="btn btn--primary--gradient">

        </form>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="text-secondary prefixed-title col-md-8 offset-md-2">
            <i class="material-icons prefix">storefront</i>
            <h1 class="title">Estoque</h1>
        </div>
    </div>
    <div class="row">
        <div class="text-secondary prefixed-title col-md-8 offset-md-2">
            <i class="material-icons prefix">warning</i>
            <h1 class="title">Em falta</h1>
        </div>

        <div class="col-md-8 offset-md-2">

            <div class="collection collection--secondary">
                <div class="collection__item">
                    Lembrancinhas
                    <div class="suffix collection__badge">16</div>
                </div>
                <div class="collection__item">
                    Papel Gossy
                    <div class="suffix collection__badge">23</div>
                </div>
                <div class="collection__item">
                    Convites
                    <div class="suffix collection__badge">10</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="text-secondary prefixed-title col-md-8 offset-md-2">
            <i class="material-icons prefix">style</i>
            <h1 class="title">Em Estoque</h1>
        </div>

        <div class="col-md-8 offset-md-2">

            <div class="collection collection--primary collection--primary--outline">
                <div class="collection__item">
                    Quadros
                    <div class="suffix collection__badge">23</div>
                </div>
                <div class="collection__item">
                    Decoração
                    <div class="suffix collection__badge">34</div>
                </div>
                <div class="collection__item">
                    Tinta para impressão
                    <div class="suffix collection__badge">30</div>
                </div>
                <div class="collection__item">
                    Flores
                    <div class="suffix collection__badge">25</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <a href="#" class="btn btn--secondary--gradient btn--float" id="modal-trigger">
                <i class="material-icons">add</i>
            </a>
        </div>
    </div>
</div>

<script src="frontend/assets/js/forms.js" charset="utf-8"></script>
<script src="frontend/assets/js/modal.js" charset="utf-8"></script>
