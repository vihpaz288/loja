<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Vendedor</title>
</head>

<body>
    <section class="section seller"
        style="background-image: url('sua-imagem-de-fundo.jpg'); background-size: cover; background-repeat: no-repeat;">
        <a href="{{ route('home') }}" id="back-button"><ion-icon name="arrow-back-circle"></ion-icon> Voltar</a>
       
            <div class="container">
                <h2 class="h2 section-title">Área do Vendedor</h2>

                <!-- Formulário para adicionar produtos -->
                <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data"
                    id="product-form">
                    @csrf
                    <div class="form-group">
                        <label for="product-image1">Imagem 1 do Produto</label>
                        <input type="file" id="product-image1" name="foto1" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="product-image2">Imagem 2 do Produto</label>
                        <input type="file" id="product-image2" name="foto2" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="product-image3">Imagem 3 do Produto</label>
                        <input type="file" id="product-image3" name="foto3" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="product-description">Descrição do Produto</label>
                        <textarea id="product-description" name="decricao" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="product-quantity">Quantidade do Produto</label>
                        <input type="number" id="product-quantity" name="quantidade" required>
                    </div>
                    <div class="form-group">
                        <label for="product-price">Preço do Produto</label>
                        <div class="price-container">
                            <span>R$</span>
                            <input type="number" id="product-price" name="precoUnitario" step="0.01" required>
                        </div>
                    </div>
                    <button id="button_enviar" type="submit">Adicionar Produto</button>
                </form>

            </div>
        </section>

        <div class="product-list" id="product-list"></div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            #back-button {
                position: fixed;
                bottom: 870px;
                right: 1650px;
                background-color: #000;
                color: #fff;
                border: none;
                border-radius: 15px;
                cursor: pointer;
                font-weight: bold;
                padding: 15px 25px;
                font-size: 20px;
                transition: background-color 0.3s;
                width: 130px;
                text-decoration: none;
            }

            body {
                font-family: 'Roboto', sans-serif;
                background-image: url('https://akamai.sscdn.co/tb/cifra-blog/pt/wp-content/uploads/2022/02/9135ab3-tipos-de-instrumentos-musicais.png');
                background-size: cover;
                background-repeat: no-repeat;
                display: flex;
                flex-direction: column;
                /* Alinhar os elementos verticalmente */
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                /* Remover margens padrão do corpo */
            }

            .section-title {
                font-family: 'Josefin Sans', sans-serif;
                text-align: center;
                margin-bottom: 50px;
                /* Reduz a margem inferior */
                margin-top: 5px;
                /* Adiciona margem superior */
                color: #000000
            }

            /* Estilo para o formulário */
            #product-form {
                max-width: 400px;
                width: 100%;
                /* Fazer o formulário ocupar a largura máxima */
                padding: 20px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }


            /* Estilo para as caixas de entrada e rótulos */
            .form-group {
                margin-bottom: 30px;
            }

            label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
            }

            input[type="text"],
            input[type="url"],
            input[type="number"],
            textarea {
                width: 100%;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 15px;
            }

            /* Estilize o botão de envio */
            #button_enviar {
                background-color: #000000;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-weight: bold;
                padding: 10px 20px;
                font-size: 18px;
                transition: background-color 0.3s;
                width: 100%;
            }

            button:hover {
                background-color: #0056b3;
            }

            /* Estilo para o contêiner do preço */
            .price-container {
                display: flex;
                align-items: center;
            }

            /* Estilo para o símbolo "R$" */
            .price-container span {
                font-weight: bold;
                font-size: 18px;
                margin-right: 5px;
            }

            /* Estilo para o campo de entrada de preço */
            .price-container input[type="number"] {
                flex: 1;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>

</body>

</html>
