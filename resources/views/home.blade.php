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
    <style>
      body{
        background-color: #DCDCDC;
        
      }
      img{
    width: 20px; !important
}
.carousel{
  margin: 10px;
  float: left;
  width: 500px; !important

}
    </style>
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
              <li class="nav-item" >
                
                <a type="button" class="btn btn-success m-1" href="{{route('carrinho.index')}}"><i class="fa-solid fa-cart-shopping ms-3" style="color: #000000;"></i>
                  <span class="translate-middle badge rounded-pill bg-danger">
                    {{count($itens)}}
                    
                  </span>
                </a>
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
                <button type="submit" class="btn btn-success m-1">Pesquisar</button>
              </div>
            </form>
          </div>
        </div>
      </nav>

      @foreach ($produtos as $produto)
      <div id="carousel-{{$produto->id}}" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('storage/'. $produto->foto1)}}" class="card-img-top" alt="...">
            <div class="carousel-caption d-none d-md-block" >
              <h3 style="background-color: black"> {{ $produto->decricao}}</h3>
              <li class="list-group-item" style="background-color: black">R$: {{ $produto->precoUnitario}}</li>
              @if (auth()->check())
                @if (auth()->user()->permissaoID == 1)
                    <div class="row">
                      <div class="col-2">
                        <a href="/vendedor/edit/{{$produto->id }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                      </div>
                      <div class="col-2">
                        <form action="{{route('produto.delete', $produto->id)}}" method="POST">
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
                      <input type = "hidden" name="id" value="{{$produto->id }}">
                      <input type = "hidden" name="decricao" value="{{ $produto->decricao}}">
                      <input type = "hidden" name="precoUnitario" value="{{ $produto->precoUnitario}}">
                      <input type = "hidden" name="foto" value="{{asset('storage/'. $produto->foto)}}">
                      <input type="number" name="quantidade" value="1">
                      <button type="submit" class="btn btn-success">Adicionar carrinho</button>
                  </form>
                  </div>
                @endif
              @endif
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('storage/'. $produto->foto2)}}" class="card-img-top" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3> {{ $produto->decricao}}</h3>
              <li class="list-group-item">R$: {{ $produto->precoUnitario}}</li>
              @if (auth()->check())
                @if (auth()->user()->permissaoID == 1)
                  <div class="row">
                  <div class="col-2">
                  <a href="/vendedor/edit/{{$produto->id }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                  </div>
                  <div class="col-2">
                    <form action="{{route('produto.delete', $produto->id)}}" method="POST">
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
    <input type = "hidden" name="id" value="{{$produto->id }}">
    <input type = "hidden" name="decricao" value="{{ $produto->decricao}}">
    <input type = "hidden" name="precoUnitario" value="{{ $produto->precoUnitario}}">
    <input type = "hidden" name="foto" value="{{asset('storage/'. $produto->foto)}}">
    <input type="number" name="quantidade" value="1" >
    <button type="submit" class="btn btn-success">Adicionar carrinho</button>
</form>
</div>
@endif
@endif
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('storage/'. $produto->foto3)}}" class="card-img-top" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3> {{ $produto->decricao}}</h3>
              <li class="list-group-item">R$: {{ $produto->precoUnitario}}</li>
              @if (auth()->check())
@if (auth()->user()->permissaoID == 1)
    <div class="row">
      <div class="col-2">
        <a href="/vendedor/edit/{{$produto->id }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
      </div>
      <div class="col-2">
        <form action="{{route('produto.delete', $produto->id)}}" method="POST">
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
    <input type = "hidden" name="id" value="{{$produto->id }}">
    <input type = "hidden" name="decricao" value="{{ $produto->decricao}}">
    <input type = "hidden" name="precoUnitario" value="{{ $produto->precoUnitario}}">
    <input type = "hidden" name="foto" value="{{asset('storage/'. $produto->foto)}}">
    <input type="number" name="quantidade" value="1">
    <button type="submit" class="btn btn-success">Adicionar carrinho</button>
</form>
</div>
@endif
@endif
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{$produto->id}}" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{$produto->id}}" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>   

</div>
@endforeach
     





      {{-- <div class="row ">
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
      </div> --}}
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>