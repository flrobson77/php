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
        setcookie("user", $_POST["txtuser"], (time() + (600)));
        setcookie("pass", $_POST["txtpass"], (time() + (600)));
        if (($_COOKIE["user"] == "robson") && ($_COOKIE["pass"] == "123456")){
            setcookie("statuslogin", $_COOKIE["user"], (time() + (120)));
            if (isset($_COOKIE["statuslogin"])){
                echo $_COOKIE["statuslogin"] . ", você está na página administrativa da SHINE Corp.<br>";
            }
            else{
                echo "Tempo esgotado. <br>";
              }
        }
        else{
          echo "E-mail ou Senha podem estar errados <br>";
        }
    ?>
    <hr>
    <footer id="rodape">
        <h2> Cookie <br/> </h2>
        <p> Usado para salvar informações do cookie do navegador</p>
        <fieldset>
            <p>Está pagina foi elaborada exclusivamente para a disciplina de segurança da informação no IFSP Câmpus Guarulhos<br>
            </p>
            <p> Copyright&copy 2018 by SecurityLabs (Prof. Robson) </p>
        </fieldset>
    </footer>
    </div>
</body>
</html>
    
