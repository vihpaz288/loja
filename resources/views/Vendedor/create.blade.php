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
    <p class="fw-bold">CADASTRO DE PRODUTOS</p>
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
    <input class="form-control" name="foto" type="file" id="formFileMultiple" multiple>
  </div>
  
  
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>