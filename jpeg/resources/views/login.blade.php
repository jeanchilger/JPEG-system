@extends("layout")

@section("content")

    <style media="screen">
        h1 {
            color: white;
        }

        .login-container {
            display: block;
            text-align: center;
            background-color: var(--secondary);
            box-shadow: var(--box-shadow);
        }

        body {
            background-color: var(--primary);
        }

        @media only screen and (min-width: 576px) {
            .login-container {
                padding: 1rem;
                /* border: var(--border-weight) solid var(--primary); */
                border-radius: var(--border-weight);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }

        @media only screen and (max-width: 576px) {
            body {
                background-color: var(--secondary);
            }
        }

    </style>

    <div class="container-fluid">

        <div class="row">

            <div class="login-container col-12 col-sm-8 col-md-4 col-lg-4">

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
        </div>
    </div>

@endsection
