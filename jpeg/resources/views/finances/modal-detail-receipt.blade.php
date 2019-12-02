<div class="modal modal--primary" id="modal-detail-receipt">
    <div class="modal__header">
        <h1 class="modal__title--prefixed">
            <i class="material-icons">assignment</i>
            Detalhamento de Recebimentos
        </h1>
    </div>

    <div class="modal__body">

        <div class="collection collection--primary">
            @foreach ($monthReceipts as $category => $value)
                <div class="collection__item">
                    {{ $category }}
                    <div class="suffix" data-role="format-as-money">
                        {{ $value }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
