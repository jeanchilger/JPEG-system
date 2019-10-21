<!-- TODO: add a file to styling login view -->

<style media="screen">
    h1 {
        color: white;
    }

    .login-container {
        padding: 0.5rem;
        display: block;
        text-align: center;
    }
</style>

<div class="login-container bg-secondary">

    <h1>LOGO</h1>
    <form action="" method="post">
        <!-- username field -->
        <div class="form-group form-group--primary">
            <i class="material-icons">email</i>
            <input type="text" id="email">
            <label for="email">e-mail</label>
        </div>

        <!-- password field -->
        <div class="form-group form-group--primary">
            <i class="material-icons">lock</i>
            <input type="password" id="password">
            <label for="password">senha</label>
        </div>

        <input type="submit" name="login" value="entrar" class="btn btn--primary--gradient">

    </form>

</div>
