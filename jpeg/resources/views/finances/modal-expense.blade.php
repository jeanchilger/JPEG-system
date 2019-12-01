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
