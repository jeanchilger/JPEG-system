<div class="modal modal--primary" id="modal-detail-expense">
    <div class="modal__header">
        <h1 class="modal__title--prefixed">
            <i class="material-icons">assignment</i>
            Detalhamento de Despesas
        </h1>
    </div>

    <div class="modal__body">
        <canvas id="detailExpenseChart"></canvas>

        <div class="collection collection--primary">
            @foreach ($monthExpenses as $category => $value)
                    <div class="collection__item">
                        {{ $category }}
                        <div class="suffix" data-role="format-as-money">
                            {{ $value }}
                        </div>
                    </div>
                {{-- <hr> --}}
            @endforeach
        </div>
    </div>
</div>
