<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php

$nombre= $_GET["usuario"];
$pass= $_GET["password"];
//$admin= $_GET["Administrador"];
//$guess= $_GET["Invitado"];
//$tecnico= $_GET["Tecnico"];

if ($_GET["tipousuario"] == "Administrador") {
    ?>

<div class="card" style="width: 18rem;">
  <img src="img/hombre.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ADMINISTRADOR</h5>
    <p class="card-text">SU USUARIO ES: <?php echo $nombre ?> </p>
    <p class="card-text">SU PASS ES: <?php echo $pass ?> </p>
    <p>Ud. está habilitado a operar como Administrador</p>

    <a href="index.html" class="btn btn-primary">Volver</a>
  </div>
</div>

<?php

}else if ($_GET["tipousuario"] == "Invitado"){
  ?>

<div class="card" style="width: 18rem;">
<img src="img/hombre.png" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">INVITADO</h5>
  <p class="card-text">SU USUARIO ES: <?php echo $nombre ?> </p>
  <p class="card-text">SU PASS ES: <?php echo $pass ?> </p>
  <p>Ud. está habilitado a operar como Invitado</p>

  <a href="index.html" class="btn btn-primary">Volver</a>
</div>
</div>

<?php

}else if ($_GET["tipousuario"] == "Tecnico"){
  ?>

<div class="card" style="width: 18rem;">
<img src="img/hombre.png" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">TECNICO</h5>
  <p class="card-text">SU USUARIO ES: <?php echo $nombre ?> </p>
  <p class="card-text">SU PASS ES: <?php echo $pass ?> </p>
  <p>Ud. está habilitado a operar como Técnico</p>

  <a href="index.html" class="btn btn-primary">Volver</a>
</div>
</div>

<?php

}else {
  echo "UD. NO INGRESO UN TIPO CORRECTO";
}



?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
