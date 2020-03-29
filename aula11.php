<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Curso de PHP </title>
    <link rel="stylesheet" type="text/css" href="/sysadmin/php/_css/estilos.css"/>
</head>
<body>
    <div id="interface">
        <header id="cabecalho">
            <h1> SHINE Corp. <br/></h1>
        
        <p>
            Obrigado por se cadastrar na Shine Corp.
        </p>
        <br>
        </header>
        <hr>
    <?php
        $_SESSION["user"] = $_POST["txtuser"];
        $_SESSION["pass"] = $_POST["txtpass"];
        if (($_SESSION["user"] == "robson") && ($_SESSION["pass"] == "123456")){
            setcookie("statuslogin", $_SESSION["user"], (time() + (120)));
            if (isset($_COOKIE["statuslogin"])){
                echo $_COOKIE["statuslogin"] . ", você está na página administrativa da SHINE Corp.<br>";
            }
            else{
                echo "Tempo esgotado. <br>";
                unset($_SESSION["user"], $_SESSION["pass"]);
              }
        }
        else{
          echo "E-mail ou Senha podem estar errados <br>";
          unset($_SESSION["user"], $_SESSION["pass"]);
        }
    ?>
    <hr>
    <footer id="rodape">
        <h2> Session <br/> </h2>
        <p> Usado para salvar informações da conexao no servidor </p>
        <fieldset>
            <p>Está pagina foi elaborada exclusivamente para a disciplina de segurança da informação no IFSP Câmpus Guarulhos<br>
            </p>
            <p> Copyright&copy 2018 by SecurityLabs (Prof. Robson) </p>
        </fieldset>
    </footer>
    </div>
</body>
</html>
    
