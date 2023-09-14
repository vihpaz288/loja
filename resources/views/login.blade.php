<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  <li class="nav-item">
    <a class="btn btn-success m-1" aria-current="page" href="{{route('home')}}">Home</a>
  </li>
</nav>

@if ($errors->any())
    <ul class="alert alert-danger col-5 mx-auto" role="alert" >
      @foreach ($errors->all() as $error)
        <li style="color: brown">{{$error}}</li>
      @endforeach
    </ul>
@endif

  <div class="login">
    <div class="row">
      <div class="col-5 mx-auto">
        <form action="{{route('login')}}" method="POST" >
          @csrf
          <div class="login_email">
            <label for="floatingInput">Email</label>
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com"> 
            </div>
            <div class="login_senha">
              <label for="floatingPassword">Senha</label>
              <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-success mt-3">Entrar</button>
          </form>
      </div>
    </div>
  
  </div>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>