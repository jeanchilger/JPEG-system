<style media="screen">
    .client-register-container {
        text-align: center;
        padding: 0.5rem;
    }

</style>

<div class="bg-primary">
    <div class="text-secondary prefixed-title">
        <i class="material-icons prefix">assignment_ind</i>
        <h1 class="title">Cadastro de clientes</h1>
    </div>

    <form class="client-register-container" method="post">

        <div class="form-group form-group--secondary">
            <input type="text" name="name" id="name">
            <label for="name">nome</label>
        </div>

        <div class="form-group form-group--secondary">
            <input type="text" name="cpf" id="cpf">
            <label for="cfp">cpf</label>
        </div>

        <div class="form-group form-group--secondary">
            <input type="text" name="email" id="email">
            <label for="email">e-mail</label>
        </div>

        <div class="form-group form-group--secondary">
            <input type="text" name="motherName" id="motherName">
            <label for="motherName">nome da mãe</label>
        </div>

        <div class="form-group form-group--secondary">
            <input type="text" name="phone" id="phone">
            <label for="phone">telefone</label>
        </div>

        <div class="form-group form-group--secondary">
            <input type="text" name="address" id="address">
            <label for="address">endereço</label>
        </div>

        <button class="btn btn--secondary--gradient" type="submit" name="submit">
            próximo
            <i class="material-icons"></i>
        </button>


    </form>
</div>

<script src="frontend/assets/js/forms.js" charset="utf-8"></script>
