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
        <a href="{{ route('teste') }}" id="back-button"><ion-icon name="arrow-back-circle"></ion-icon> Voltar</a>
        <section class="section seller"
            style="background-image: url('sua-imagem-de-fundo.jpg'); background-size: cover; background-repeat: no-repeat;">
            <div class="container">
                <h2 class="h2 section-title">Área do Vendedor</h2>
                <form action="/Produtos/update/{{ $produtos->id }}" method="POST" enctype="multipart/form-data"
                    id="product-form">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="product-description">Descrição do Produto</label>
                        <textarea id="product-description" name="decricao" required>{{ $produtos->decricao }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="product-quantity">Quantidade do Produto</label>
                        <input type="number" id="product-quantity" name="quantidade" required
                            value="{{ $produtos->quantidade }}">
                    </div>
                    <div class="form-group">
                        <label for="product-price">Preço do Produto</label>
                        <div class="price-container">
                            <span>R$</span>
                            <input type="number" id="product-price" name="precoUnitario" step="0.01" required
                                value="{{ $produtos->precoUnitario }}">
                        </div>
                    </div>
                    <button type="submit">Editar Produto</button>
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
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .section-title {
                font-family: 'Josefin Sans', sans-serif;
                text-align: center;
                margin-bottom: 50px;
                margin-top: 5px;
                color: #000000
            }
            #product-form {
                max-width: 400px;
                width: 100%;
                padding: 20px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
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
            button {
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
            .price-container {
                display: flex;
                align-items: center;
            }
            .price-container span {
                font-weight: bold;
                font-size: 18px;
                margin-right: 5px;
            }
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
