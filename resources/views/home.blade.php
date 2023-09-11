<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="btn btn-success m-1" aria-current="page" href="{{route('home')}}" >Home</a>
              </li>
              {{-- {{dd(auth()->user())}} --}}
              @if (auth()->check())
                  
              
              @if (auth()->user()->permissaoID == 1)
              <li class="nav-item">
                <a class="btn btn-success m-1" href="{{route('produto.create')}}">Criar produto</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-danger m-1" href="{{route('sair')}}">Sair</a>
              </li>
              @else
              <li class="nav-item">
                <a class="btn btn-success m-1" href="{{route('carrinho.index')}}">Carrinho<i class="fa-solid fa-cart-shopping ms-3" style="color: #000000;"></i></a>
              </li>
              <li class="nav-item">
                <a class="btn btn-danger m-1" href="{{route('sair')}}">Sair</a>
              </li>
              @endif
              @else
              <li class="nav-item">
                <a class="btn btn-success m-1" href="{{route('create')}}">Se cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-success m-1" href="{{route('login.create')}}">Login</a>
              </li>
           
              @endif
             
            </ul>
            <form action="{{route ('home')}}" method="get" class="d-flex" role="search" >
             
                <input type="text" class="form-control" id="search" name="search" placeholder="digite uma busca">
                <button type="submit" class="btn btn-success m-1">pesquisar</button>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <div class="row ">
        @foreach ($produtos as $produtos)
        <div class="col-3 mx-auto">
          <div class="card" style="width: 100%;">
            <img src="{{asset('storage/'. $produtos->foto)}}" class="card-img-top" alt="...">
            <div class="card-body">
              
              <h3> {{ $produtos->decricao}}</h3>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">R$: {{ $produtos->precoUnitario}}</li>
              </ul>
            <div class="card-body">
              @if (auth()->check())
              @if (auth()->user()->permissaoID == 1)
                  <div class="row">
                    <div class="col-2">
                      <a href="/vendedor/edit/{{$produtos->id }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                    <div class="col-2">
                      <form action="{{route('produto.delete', $produtos->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-success" ><i class="fa-solid fa-trash"></i></button>
                      </form>
                    </div>
                  </div>
             
              
              @else
              <div class="card-body">
                <form action="{{route('carrinho.store')}}" method="POST">
                  @csrf
                  <input type = "hidden" name="id" value="{{$produtos->id }}">
                  <input type = "hidden" name="decricao" value="{{ $produtos->decricao}}">
                  <input type = "hidden" name="precoUnitario" value="{{ $produtos->precoUnitario}}">
                  <input type = "hidden" name="foto" value="{{asset('storage/'. $produtos->foto)}}">
                  <input type="number" name="quantidade" value="1">
                  <button type="submit" class="btn btn-success">Adicionar carrinho</button>
              </form>
              </div>
              @endif
              @endif
              </div>
          </div>
        </div>
        @endforeach
      </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>