<?php

include_once("private/process.php");


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Charles Dantas">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
        <!--END Required meta tags -->

    <!-- EXTENSIONS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/styleMain.CSS">
    <script type="text/javascript" src="js/jsMain.js"></script>
        <!-- END EXTENSIONS -->

    <link rel="icon" href="">
    <title>Simples estoque</title>
  </head>
  <body id="body">



    <div id="painel-left" class="float-left bg-dark">
        <div class="container">
            <div class="row">
                <h1 class="text-body text-center col-12">Painel</h1>
            </div>
            <nav id="navMain">
                    <ul id="ul-main">
                        <li>
                            <a class="float-left text-light col-2" href="index.php">Tela inicial</a>
                        </li>
                    </ul>
                </nav>

                <form class="form" method="POST" action="private/process.php">
                <label class="float-left text-body">Nome</label><br>
                <input type="text" placeholder="Nome..." autofocus required name="RR"><br>
               <br> <input type="submit" value="Enviar" name="SEND4">
                <input type="reset" value="Resetar">
            </form>  


            <form class="form" method="POST" action="private/process.php">

               <br><br><label class="float-left">Atualizar</label><br>

               <label class="float-left text-body" class="float-left">ID</label><br>
               <input type="text" placeholder="Nome..." autofocus required name="rR"><br>

               <label class="float-left text-body" class="float-left">Nome</label><br>
                <input type="text" placeholder="Nome..." autofocus required name="Mname"><br>
                <label class="float-left text-body">Fornecedor</label><br>
                <input type="text" placeholder="Nome fornecedor..." autofocus required name="MnameFornecedor"><br>
                <label class="float-left text-body">Validade</label><br>
                <input type="text" placeholder="Validade..." autofocus required name="Mvalidade"><br>
                <label class="float-left text-body">Preço</label><br>
                <input type="text" placeholder="Preco..." autofocus required name="Mpreco"><br>
                <label class="float-left text-body">Quantidade</label><br>
                <input type="number" placeholder="Quantidade..." autofocus required name="Mqtd"><br>

              <br> <input type="submit" value="Atualizar....." name="SEND5">
            </form>
        </div>
    </div>


    <div id="db-Main" class="float-right bg-light">
        <div class="container">


            <div class="row">
                <h1 class="text-center text-body col-12">Banco de dados</h1>
            </div>

            <?php

        require_once("private/process.php");

        $m = new Main();
        $m->Connect_and_actualize();

    ?>



            
        </div>
    </div>
      
    
  </body>
</html>