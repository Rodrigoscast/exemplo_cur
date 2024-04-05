<?php 
session_start();
require_once 'usuario.php';
?>
<!DOCTYPE html>
<!-- saved from url=(0054)http://getbootstrap.com.br/examples/navbar-static-top/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com.br/favicon.ico">

    <title>Resenha Authentic</title>

  <link href="css/estilo.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-static-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
   

    <!-- Static navbar -->
    <div class="barra-nav">
      <div class="navbar-top">
        <a href="./" id="resenha"><img src="./img/capa/Resenha-white.png"></a>
        <div class="campos-pesquisa"></div>
        <div class="usuario-topo">
          <div class="search-container">
            <input type="text" class="search-input" placeholder="Pesquisar na loja...">
            <button class="search-button">
              <ion-icon name="search-outline"class="search-icon"></ion-icon>
            </button>
          </div>
            <?php
            $usuario = "";
            if(usuarioEstaLogado()){
              $usuario =  buscaUsuario2($conexao, $_SESSION['usuario']['codigo']);?>
              <a href="carrinho.php"><ion-icon name="bag-handle-outline" style="font-size: 3vw;"></ion-icon></a>
            <?php } else { ?>
              <a href="login.php"><ion-icon name="bag-handle-outline" style="font-size: 3vw"></ion-icon></a>
              <?php } ?>
            <div class="login">
              <ul class="nav navbar-nav navbar-right">
      
                <li class="dropdown" >
                  <a href="#" id="usuario-drop" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php
                      $usuario = "";
                        if(usuarioEstaLogado()):
                          $usuario =  buscaUsuario2($conexao, $_SESSION['usuario']['codigo']);?>
                          <img style="width: 35px; padding:0; margin:0; border-radius: 50%" src="<?=$usuario['imagem'] ?>">
                      <span class="caret"></span></a>
      
                      <ul class="dropdown-menu">
                              <li><a href="login.php?logout="<?=$usuario['nome']?>"><strong>Sair</strong></a></li>
                              <?=$usuario['login']?>
                      </ul>
      
                      <?php else: ?>
                      Login
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li>
                            <div class="form-group">
                              <form action="index.php" method="post" navbar-form="navbar-right" style="width: 235px;">
                                      <div class="form-group">
                                        <label style="text-indent: 4px;">Usuario:<br><input type="text" name="login" placeholder="Email" class="form-control" style="margin-left: 5px;"></label>
                                      </div>
                                      <div class="form-group">
                                        <label style="text-indent: 4px;">Senha:<br><input type="password" name="senha" placeholder="Senha" class="form-control" style="margin-left: 5px;"></label>
                                      </div>
                                      <button type="submit" class="btn btn-success" style="width: 215px;margin: 5px;">Entrar</button>
                    </form>
                          <?php endif; ?>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="filtros"></div>
      
    </div>

    

<?php error_reporting(E_ALL ^ E_NOTICE ^E_WARNING);?> 