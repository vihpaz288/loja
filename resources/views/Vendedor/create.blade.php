<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  <li class="nav-item">
    <a class="btn btn-success" aria-current="page" href="{{route('home')}}" >Home</a>
  </li>
</nav>
    <h1>Cadastro de produtos</h1>
<form action="{{route('produto.store')}}" method="POST" enctype="multipart/form-data" class="row g-3" >
@csrf
<div class="mb-3">
    <div class="form-floating">
        <textarea class="form-control" name="decricao" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Descrição</label>
      </div><br>
      <div class="input-group mb-3">
        <span class="input-group-text">Valor Unitario R$:</span>
        <input type="number"  name="precoUnitario" class="form-control" aria-label="Amount (to the nearest dollar)">
        
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">Quantidade:</span>
        <input type="float" name="quantidade" class="form-control" aria-label="Amount (to the nearest dollar)"> 
      </div>
      <p>ATENÇÃO IMAGEM NÃO PODE SER ALTERADA APÓS CADASTRO</p>
    <label for="foto" class="form-label">Coloque a imagem do item</label>
    <input class="form-control" name="foto1" type="file" id="formFileMultiple" multiple>
    <input class="form-control" name="foto2" type="file" id="formFileMultiple" multiple>
    <input class="form-control" name="foto3" type="file" id="formFileMultiple" multiple>
    
  </div>
  
  
    <div class="col-12">
      <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>