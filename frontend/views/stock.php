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
                <input type="text" id="name">
                <label for="name">nome</label>
            </div>

            <!-- product quantity field -->
            <div class="form-group form-group--primary">
                
                <input type="number" id="quantity">

                <label for="quantity">quantidade</label>
            </div>

            <input type="submit" name="save" value="salvar" class="btn btn--primary--gradient">

        </form>
    </div>
</div>

<a class="btn btn--secondary--gradient">modal trigger</a>

<script src="frontend/assets/js/forms.js" charset="utf-8"></script>
