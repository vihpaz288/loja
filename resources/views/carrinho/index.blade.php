<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="btn btn-success m-1" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              
            </nav>
            <h5>Valor total: {{$total}}</h5>
              <table class="table">
            
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">quantidade </th>
                    <th scope="col">Total </th>
                    <th scope="col"></th>



                  </tr>
                  
                </thead>
                <tbody>
                
                  <input type="hidden" value="{{$contador = 1}}">
                  @foreach ($itens as $iten)
                      
                  <form action="{{route('carrinho.destroy', $iten->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                  <tr>
                    <td scope="row">{{$contador ++}}</td>
                    <td>{{$iten->produtos->decricao}}</td>
                    <td>{{$iten->produtos->precoUnitario}}</td>
                    <td>{{$iten->quantidade}} 

                </td>
                    <td>{{($iten->produtos->precoUnitario) * ($iten->quantidade)}}</td>

                    <td>
                      <button type="submit" class="btn btn-danger">Remover</button>
                    </form></td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              
              
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Finalizar compra
</button>

<!-- Modal -->
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
        <select class="form-control" name="opcao" id="">
            <option value="1">pix</option>
            <option value="2">Cartao</option>
          </select>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <a href="{{route('carrinho.finalizar')}}" class="btn btn-success">Comprar</a>
      </div>
    </div>
  </div>
</div>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>