<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>
        /* Coloque aqui o seu código CSS, que parece estar correto */
    </style>
</head>


<body>

    <div class="container"
        style="background-image: url('sua-imagem-de-fundo.jpg'); background-size: cover; background-repeat: no-repeat;">

        <div class="content first-content">

            <div class="first-column">
                @if ($errors->any())
                    <ul class="alert alert-danger col-5 mx-auto" role="alert">
                        @foreach ($errors->all() as $error)
                            <li style="color: brown">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <p class="description description-primary">Para se manter conectado conosco</p>
                <p class="description description-primary">faça seu login</p>
                <button id="signin" class="btn btn-primary">Login</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Criar Conta</h2>
                <div class="social-media"></div>

                <form action="{{ route('user.store') }}" method="POST" class="form">
                    @csrf
                    <label class="label-input" for="nome1">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" id="nome1" name="name" placeholder="Nome">
                    </label>

                    <label class="label-input" for="email1">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" id="email1" name="email" placeholder="Email">
                    </label>

                    <label class="label-input" for="senha1">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" id="senha1" name="password" placeholder="Senha">
                    </label>

                    <label class="label-input" for="perfil1">
                        <i class="fas fa-user icon-modify"></i>
                        <select name="permissaoID" class="perfil" id="perfil1">
                            <option value="1">Vendedor</option>
                            <option value="2">Cliente</option>
                        </select>
                    </label>
                    <button type="submit" class="btn btn-second inscreva-se">Inscreva-se</button>

                </form>
            </div><!-- segunda columna -->
        </div><!-- primeiro conteudo -->

        <div class="content second-content">
            <div class="first-column">
                <p class="description description-primary">Insira seus dados pessoais</p>
                <p class="description description-primary">e comece sua jornada</p>
                <button id="signup" class="btn btn-primary">Inscreva-se</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Faça Login</h2>

                @if ($errors->any())
                    <ul class="alert alert-danger col-5 mx-auto" role="alert">
                        @foreach ($errors->all() as $error)
                            <li style="color: brown">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="social-media"></div>

                <form action="{{ route('login') }}" method="POST" class="form">
                    @csrf

                    <label class="label-input" for="email2">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" id="email2" name="email" placeholder="Email">
                    </label>

                    <label class="label-input" for="senha2">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" id="senha2" name="senha" placeholder="Senha">
                    </label>


                    <button type="submit" class="btn btn-second inscreva-se">Entrar</button>
                </form>
            </div><!-- segunda columna -->
        </div><!-- segundo conteudo -->
    </div>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;

        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ecf0f1;
        }

        .content {
            background-color: #fff;
            border-radius: 15px;
            width: 960px;
            height: 50%;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .content::before {
            content: "";
            position: absolute;
            background-color: #000000;
            width: 40%;
            height: 100%;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;


            left: 0;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            text-transform: capitalize;
        }

        .title-primary {
            color: #fff;
        }

        .title-second {
            color: #000000;
        }

        .description {
            font-size: 14px;
            font-weight: 300;
            line-height: 30px;
        }

        .description-primary {
            color: #fff;
        }

        .description-second {
            color: #7f8c8d;
        }

        .btn {
            border-radius: 15px;
            text-transform: uppercase;
            color: #fff;
            font-size: 10px;
            padding: 10px 50px;
            cursor: pointer;
            font-weight: bold;
            width: 150px;
            align-self: center;
            border: none;
            margin-top: 1rem;
        }

        .btn-primary {
            background-color: transparent;
            border: 1px solid #fff;
            transition: background-color .5s;
        }

        .btn-primary:hover {
            background-color: #fff;
            color: #000000;
        }

        .btn-second {
            background-color: #000000;
            border: 1px solid #000000;
            transition: background-color .5s;
        }

        .btn-second:hover {
            background-color: #fff;
            border: 1px solid #000000;
            color: #000000;
        }

        .first-content {
            display: flex;
        }

        .first-content .second-column {
            z-index: 11;
        }

        .first-column {
            text-align: center;
            width: 40%;
            z-index: 10;
        }

        .second-column {
            width: 60%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .social-media {
            margin: 1rem 0;
        }

        .link-social-media:not(:first-child) {
            margin-left: 10px;
        }

        .link-social-media .item-social-media {
            transition: background-color .5s;
        }

        .link-social-media:hover .item-social-media {
            background-color: #000000;
            color: #fff;
            border-color: #000000;
        }

        .list-social-media {
            display: flex;
            list-style-type: none;
        }

        .item-social-media {
            border: 1px solid #bdc3c7;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            color: #95a5a6;
        }

        .form {
            display: flex;
            flex-direction: column;
            width: 55%;
        }

        .form input {
            height: 45px;
            width: 100%;
            border: none;
            background-color: #ecf0f1;
        }

        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0px 1000px #ecf0f1 inset !important;
            -webkit-text-fill-color: #000 !important;
        }

        .label-input {
            background-color: #ecf0f1;
            display: flex;
            align-items: center;
            margin: 8px;
        }

        .icon-modify {
            color: #7f8c8d;
            padding: 0 5px;
        }

        .second-content {
            position: absolute;
            display: flex;
        }

        .second-content .first-column {
            order: 2;
            z-index: -1;
        }

        .second-content .second-column {
            order: 1;
            z-index: -1;
        }

        .password {
            color: #34495e;
            font-size: 14px;
            margin: 15px 0;
            text-align: center;
        }

        .password::first-letter {
            text-transform: capitalize;
        }



        .sign-in-js .first-content .first-column {
            z-index: -1;
        }

        .sign-in-js .second-content .second-column {
            z-index: 11;
        }

        .sign-in-js .second-content .first-column {
            z-index: 13;
        }

        .sign-in-js .content::before {
            left: 60%;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            animation: slidein 1.3s;

            z-index: 12;
        }

        .sign-up-js .content::before {
            animation: slideout 1.3s;

            z-index: 12;
        }

        .sign-up-js .second-content .first-column,
        .sign-up-js .second-content .second-column {
            z-index: -1;
        }

        .sign-up-js .first-content .second-column {
            z-index: 11;
        }

        .sign-up-js .first-content .first-column {
            z-index: 13;
        }



        .sign-in-js .first-content .second-column {

            z-index: -1;
            position: relative;
            animation: deslocamentoEsq 1.3s;
        }

        .sign-up-js .second-content .second-column {
            position: relative;
            z-index: -1;
            animation: deslocamentoDir 1.3s;
        }


        @keyframes deslocamentoEsq {

            from {
                left: 0;
                opacity: 1;
                z-index: 12;
            }

            25% {
                left: -80px;
                opacity: .5;

            }

            50% {
                left: -100px;
                opacity: .2;

            }

            to {
                left: -110px;
                opacity: 0;
                z-index: -1;
            }
        }


        @keyframes deslocamentoDir {

            from {
                left: 0;
                z-index: 12;
            }

            25% {
                left: 80px;

            }

            50% {
                left: 100px;

            }

            to {
                left: 110px;
                z-index: -1;
            }
        }




        @keyframes slidein {

            from {
                left: 0;
                width: 40%;
            }

            25% {
                left: 5%;
                width: 50%;
            }

            50% {
                left: 25%;
                width: 60%;
            }

            75% {
                left: 45%;
                width: 50%;
            }

            to {
                left: 60%;
                width: 40%;
            }
        }

        @keyframes slideout {

            from {
                left: 60%;
                width: 40%;
            }

            25% {
                left: 45%;
                width: 50%;
            }

            50% {
                left: 25%;
                width: 60%;
            }

            75% {
                left: 5%;
                width: 50%;
            }

            to {
                left: 0;
                width: 40%;
            }
        }


        @media screen and (max-width: 1040px) {
            .content {
                width: 100%;
                height: 100%;
            }

            .content::before {
                width: 100%;
                height: 40%;
                top: 0;
                border-radius: 0;
            }

            .first-content,
            .second-content {
                flex-direction: column;
                justify-content: space-around;
            }

            .first-column,
            .second-column {
                width: 100%;
            }

            .sign-in-js .content::before {
                top: 60%;
                left: 0;
                border-radius: 0;

            }

            .form {
                width: 90%;
            }



            @keyframes deslocamentoEsq {

                from {
                    top: 0;
                    opacity: 1;
                    z-index: 12;
                }

                25% {
                    top: -80px;
                    opacity: .5;

                }

                50% {
                    top: -100px;
                    opacity: .2;

                }

                to {
                    top: -110px;
                    opacity: 0;
                    z-index: -1;
                }
            }


            @keyframes deslocamentoDir {

                from {
                    top: 0;
                    z-index: 12;
                }

                25% {
                    top: 80px;

                }

                50% {
                    top: 100px;

                }

                to {
                    top: 110px;
                    z-index: -1;
                }
            }



            @keyframes slidein {

                from {
                    top: 0;
                    height: 40%;
                }

                25% {
                    top: 5%;
                    height: 50%;
                }

                50% {
                    top: 25%;
                    height: 60%;
                }

                75% {
                    top: 45%;
                    height: 50%;
                }

                to {
                    top: 60%;
                    height: 40%;
                }
            }

            @keyframes slideout {

                from {
                    top: 60%;
                    height: 40%;
                }

                25% {
                    top: 45%;
                    height: 50%;
                }

                50% {
                    top: 25%;
                    height: 60%;
                }

                75% {
                    top: 5%;
                    height: 50%;
                }

                to {
                    top: 0;
                    height: 40%;
                }
            }

        }

        @media screen and (max-width: 740px) {
            .form {
                width: 50%;
            }
        }

        @media screen and (max-width: 425px) {
            .form {
                width: 100%;
            }
        }
    </style>

    <script>
        var btnSignin = document.querySelector("#signin");
        var btnSignup = document.querySelector("#signup");

        var body = document.querySelector("body");


        btnSignin.addEventListener("click", function() {
            body.className = "sign-in-js";
        });

        btnSignup.addEventListener("click", function() {
            body.className = "sign-up-js";
        })

        var inscrevaSeButtons = document.querySelectorAll(".inscreva-se");

        inscrevaSeButtons.forEach(function(button, index) {
            button.addEventListener("click", function() {
                var selectPerfil = document.querySelectorAll(".perfil")[index];
                var selectedPerfil = selectPerfil.value;

                // Redirecionar com base na opção selecionada
                if (selectedPerfil === "cliente") {
                    window.location.href = "index.html"; // Redirecione para a página do cliente
                } else if (selectedPerfil === "usuario") {
                    window.location.href = "vendedor.html"; // Redirecione para a página do vendedor
                }
            });
        });
    </script>

</body>

</html>
