
<!doctype html>
<html lang="pt-br" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Alexandre Costa">
  <meta name="generator" content="Hugo 0.80.0">
  <title>Desafio Técnico</title>

  <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">


<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  
  <!-- Customizando header e footer -->
  <link href="navbar-top-fixed.css" rel="stylesheet">
  <link href="sticky-footer.css" rel="stylesheet">
</head>

<!--<body class="d-flex flex-column h-100">-->
<body class="d-flex flex-column h-100">




<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
  <div class="container">
    <a class="navbar-brand" href="<?php echo BASEURL; ?>index.php">Desafio Técnico</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php 
      session_start();
      if(isset($_SESSION['login'])) :
    ?>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Clientes</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown07">
            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>clientes">Gerenciar Clientes</a></li>
            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>clientes/add.php">Novo Cliente</a></li>
          </ul>
        </li>

      </ul>


      <a href="/desafio_tecnico_kabum/index.php?sair=1">sair</a>
      <?php endif; ?>
      
    </div>
  </div>
</nav>

<main class="container">