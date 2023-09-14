<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  <li class="nav-item">
    <a class="btn btn-success m-1" aria-current="page" href="{{route('home')}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="btn btn-success m-1" href="{{route('login.create')}}">Login</a>
  </li>
</nav>

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li style="color: brown">{{$error}}</li>
      @endforeach
    </ul>
      
  @endif
    
    <form action="{{route('store')}}" method="POST" class="row g-3">
      @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="inputEmail4">
          </div>
          
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">nascimento</label>
            <input type="date" name="dataDeNascimento" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Tipo de usuário</label>
            <select class="form-control" name="permissaoID" id="">
                <option value="1">Vendedor</option>
                <option value="2">Cliente</option>
              </select>
            </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="inputPassword4">
        </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
</body>
</html>