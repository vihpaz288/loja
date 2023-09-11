<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
  <div class="login">
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
      <input type="submit">
    </form>
  </div>  
</body>
</html>