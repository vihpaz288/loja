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
    
    <form action="" method="" class="row g-3">
      @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Endereço</label>
            <input type="text" name="nome" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6"> forma de pagamento
          <select class="form-control" name="permissaoID" id="">
              <option value="1">Cartão </option>
              <option value="2">Pix</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">telefone</label>
            <input type="number" name="email" class="form-control" id="inputEmail4">
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Comprar</button>
        </div>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
</body>
</html>