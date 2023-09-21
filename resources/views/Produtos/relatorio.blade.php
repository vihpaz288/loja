<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="" alt="">
        </div>
        <h1 class="text-center mb-5">Relatório de vendas de produtos por pedido</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">código</th>
                    <th scope="col">Produto</th>
                    <th scope="col" class="text-center">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->produtoId }}</td>
                        <td>{{ $pedido->produtos->decricao }}</td>
                        <td class="text-center">{{ $pedido->pedidos_total }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
           <p>Relatorio gerado em: {{ $dataAtual}} </p> 
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
