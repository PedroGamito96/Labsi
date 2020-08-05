<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LABSI2</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php
$current = "";
include ('db.php'); 

include ('session.php');

include('header.php'); 
?>
<div class="container-fluid wraper">
	<?php include('sidenav.php') ?>
    <br>
    <div class="col-sm-8 textcontent">
        <h1 class="title"><strong>Projecto</strong></h1>
        <br><br><br><br>
        <form>
          <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" >

          </div>
          <div class="form-group">
            <label for="texto">Texto</label>
            <textarea class="form-control" id="texto" rows="3"></textarea class="form-control">
          </div>
          <div class="form-group">
            <label for="fotografia">Escolha uma fotografia</label>
            <input type="file" class="form-control-file" id="fotografia">
          </div>
          <button type="publicar" class="btn btn-primary">Publicar</button>
        </form>
    </div>
</div>

</body>
</html>