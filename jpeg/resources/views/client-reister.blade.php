@extends("layout")

@section("content")
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
            <i class="material-icons prefix">assignment_ind</i>
            <h1 class="title">Cadastro de clientes</h1>
        </div>

        <form class="client-register-container col-12 col-md-8 offset-md-2" method="post">

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
                Prosseguir
                <i class="material-icons"></i>
            </button>


        </form>
    </div>
</div>

<script src="frontend/assets/js/forms.js" charset="utf-8"></script>
@endsection
