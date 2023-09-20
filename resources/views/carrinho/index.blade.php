<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>  
    <style>
        body {
            
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #6a5acd;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        
        main {
            padding: 20px;
        }
        
        .cart-item {
            display: flex;
            border: 1px solid #ccc;
            background-color: #fff;
            margin-bottom: 10px;
            padding: 10px;
        }
        
        .cart-item img {
            width: 100px;
            height: 100px;
            margin-right: 10px;
        }
        
        .item-details {
            flex-grow: 1;
        }
        
        footer {
            background-color: #6a5acd;
            color: #fff;
            text-align: right;
            padding: 10px;
        }
        
        .total {
            font-weight: bold;
            font-size: 18px;
            margin-right: 10px;
        }
        
        .checkout-button {
            background-color: #8a2be2;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        
        .checkout-button:hover {
            background-color: #5f1a8e;
        }

        .remover{
            width: 80px;
            height: 30px;
            font-size: 15px;
            letter-spacing: 1px;
            background-color: #B22222;
            color:#FFFAF0;
            border-radius: 10px;
            border: 2px solid #B22222;
            margin: 50px;
        }
        .remover:hover {
            background-color: #800000;
            cursor: pointer;
        }
        .navbar-item{

        }
        </style>

     <header>
    <!-- <li class="navbar-item">
        <a href="{{ route('teste') }}" class="navbar-link">Inicio</a>
    </li> -->
        <h1>Carrinho de Compras</h1>
    </header> 
    <main>
    <input type="hidden" value="{{ $contador = 1 }}">
            @foreach ($itens as $iten)
                <form action="{{ route('carrinho.destroy', $iten->id) }}" method="POST"
                    id="form-item-{{ $iten->id }}">
                    @csrf
                    @method('DELETE')
        <div class="cart-item">
            
            <div class="item-details">
                <h2>{{ $iten->produtos->decricao }}</h2>
                <p>Valor:{{ $iten->produtos->precoUnitario }}</p>
                <p>Quantidade:{{ $iten->quantidade }}</p>
            </div>
            <button type="submit" class="remover">Remover</button>
    </form>
</div>
@endforeach
    </main>
    <footer>
        <div class="total">
            <p>Total: R$ {{ $total }}</p>
        </div>
        <button type="button" class="checkout-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Finalizar compra
        </button>
    </footer>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Insira seus dados</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Forma de pagamento</label>
                        <select class="form-control" name="opcao" id="opcao" >
                            <option selected disabled value="">Pagamento</option>
                            <option value="1">pix</option>
                            <option value="2">Cartao</option>
                        </select>
                            <div id="cartao" style="display:none">
                                <label for="">Numero</label>
                                <input type="number">
                                <label for="">validade</label>
                                <input type="number">
                            </div>
                            <p id="pix" style="display: none">Chave pix: 20202336</p>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">endereço</label>
                        <input type="text" name="endereco" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">telefone</label>
                        <input type="text" name="telefone" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-12">
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('carrinho.finalizar') }}" method="POST" id="form-finalizar-compra">
                            @csrf
                            @foreach ($itens as $iten)
                            <input type="hidden" name="produtos[]" id="produtos" value="{{$iten->produtos->id}}">
                            @endforeach
                            <button type="submit" class="checkout-button">comprar</button>
                        </form>
                        <button type="button" class="checkout-button" data-bs-dismiss="modal">Fechar</button>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script> 
        {{-- <script type="text/javascript">
            const formFinalizarCompra = document.getElementById('form-finalizar-compra');

            const buttonFinalizarCompra = document.getElementById('btn-finalizar-compra');

            buttonFinalizarCompra.addEventListener('click', function() {
                formFinalizarCompra.submit();
            });
            const submeterFormularioDeExclusao = (itemId) => {
                const formItem = document.getElementById(`form-item-${itemId}`);
                formItem.submit();
            }
        </script> --}}
         <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script>
            $('#opcao').on('change', function(){
                let opcao = $('#opcao').val()
                if (opcao == 2){
                    $('#cartao').show()
                    $('#pix').hide()
                }
                else{
                    $('#pix').show()
                    $('#cartao').hide()
                }
            })
        </script>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

