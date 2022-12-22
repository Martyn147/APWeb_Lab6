<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Restaurantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
   
</head>



<body>  

<h1>REGISTRO</h1>
    <div id = "xd">
    <form action="" >
        <label>Razon social</label>
        <input type="text" name="RazonSocial">
        <br>
        <label>Nombre del Restaurante</label>
        <input type="text" name="nombreRestaurante">
        <br>
        <label>Direccion del local</label>
        <input type="text" name="direccionLocal">
        <br>
        <label>Gerente del local</label>
        <input type="text" name="nombreGerente">
        <br>
        <label>Foto</label>
        <input type="file" name="fotoLocal">
        <br>
        <label>Tipo de Local</label>
        <br>
        <label> Restaurante:
        <input type="radio" name="categoriaLocal" value="Restaurante">
      </label>
      <label> Comida Rapida:
        <input type="radio" name="categoriaLocal" value="Comida Rapida">
      </label>
      <label> Cafeteria:
        <input type="radio" name="categoriaLocal" value="Cafeteria">
      </label>
      <label> Bar:
        <input type="radio" name="categoriaLocal" value="Bar">
      </label>
        <label> Miselanea:
        <input type="radio" name="categoriaLocal" value="Miselanea">
      </label>
        <br>
        <label>Direccion de E-mail</label>
        <input type="text" name="E-mail">
        
        <div id="botones">
        <button  class="btn btn-outline-success" type="submit">Registrar</button>
        <button class="btn btn-outline-danger" type="cleanForm">Borrar</button>
        </div>
     

    </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>