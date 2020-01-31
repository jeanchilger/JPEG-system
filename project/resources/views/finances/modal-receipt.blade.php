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
                <label for="value">Valor do Recebimento</label>
            </div>

            <!-- Receipt date -->
            <div class="form-group form-group--secondary">
                <i class="material-icons">calendar_today</i>
                <input type="text" id="date" name="date" data-role="date" pattern="\d{1,2}/\d{1,2}/\d{4}" maxlength="10">
                <label for="date">Data</label>
            </div>

            <!-- Receipt category -->
            <div class="form-group form-group--secondary">
                <div class="select">
                    <i class="material-icons">category</i>
                    <select name="category" id="category">
                        <option value="">Selecione uma</option>
                        @foreach ($receiptCategories as $category)
                            <option value="{{ $category -> name }}">
                                {{ $category -> name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="category">Categoria</label>

                </div>
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
