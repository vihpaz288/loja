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
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              {{-- {{dd(auth()->user())}} --}}
              @if (auth()->check())
                  
              
              @if (auth()->user()->permissaoID == 1)
              <li class="nav-item">
                <a class="nav-link" href="{{route('produto.create')}}">Criar produto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('sair')}}">Sair</a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="">carrinho</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('sair')}}">Sair</a>
              </li>
              @endif
              @else
              <li class="nav-item">
                <a class="nav-link" href="{{route('create')}}">Se cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('login.create')}}">Login</a>
              </li>
                  
              
              @endif
             
              
            
            </ul>
            <form action="{{route ('home')}}" method="get">
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Procure </label>
                <input type="text" class="form-control" id="search" name="search" placeholder="digite uma busca">
                <button type="submit" >pesquisar</button>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($produtos as $produtos)
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('storage/'. $produtos->foto)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Descrição</h5>
              <p class="card-text">{{ $produtos->decricao}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">R$: {{ $produtos->precoUnitario}}</li>
              </ul>
            <div class="card-body">
              @if (auth()->check())
              @if (auth()->user()->permissaoID == 1)
                  
              <a href="/vendedor/edit/{{$produtos->id }}" class="card-link"><i class="fa-solid fa-pen-to-square" style="color: #170703;"></i></a>
              <form action="/vendedor/{{$produtos->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"><i class="fa-solid fa-trash" style="color: #090201;"></i></button>
              </form>
              @else
              <div class="card-body">
                <a href="" class="card-link">Comprar</i></a>
                <a href="{{route('carrinho.create')}}" class="card-link">Adicionar ao carrinho</a>
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