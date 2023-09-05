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
    <p class="fw-bold">EDIÇÃO DE PRODUTOS</p>
<form action="/vendedor/update/{{$produtos->id }}" method="POST" enctype="multipart/form-data" class="row g-3" >
@csrf
@method('PUT')
<div class="mb-3">
    <div class="form-floating">
        <textarea class="form-control" name="decricao" placeholder="Escreva aqui a descrição"  id="floatingTextarea2" style="height: 100px" required>{{$produtos->decricao}}</textarea>
        <label for="floatingTextarea2"></label>
      </div><br>
      <div class="input-group mb-3">
        <span class="input-group-text">Valor Unitario R$:</span>
        <input type="text" onkeyup="formatarValor(this)" name="precoUnitario" value="{{$produtos->precoUnitario}}" class="form-control" aria-label="Amount (to the nearest dollar)">
        
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text">Quantidade:</span>
        <input type="float" name="quantidade" value="{{ $produtos->quantidade}}" class="form-control" aria-label="Amount (to the nearest dollar)"> 
      </div>
    <label for="foto" class="form-label">Coloque a imagem do item</label>
    <input class="form-control" name="foto" type="file" id="formFileMultiple" multiple>
    <img src="{{asset('storage/'. $produtos->foto)}}" class="rounded float-start" alt="...">
  </div>
  
  
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Editar</button>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>