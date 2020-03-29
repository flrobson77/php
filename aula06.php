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
            <h1> Aula06 <br/></h1>
            Funções em PHP.
        <br>
        </header>
        <hr>
    <?php
        //funçoes
        function promocao($codigo){
            if ($codigo == "Cursophp"){
                $msg = "Código Válido<br>";
            }
            else{
                $msg = "Código inválido<br>";
            }
            return $msg;
        }
        //Programa
        $codigo = "Cursophp";
        echo promocao($codigo);
        $codigo = "Nada";
        echo promocao($codigo);
    ?>
       <hr>
        <footer id="rodape">
            <p> Este exemplo faz parte dos fundamentos do PHP</p>
            <fieldset>
                <p>Está pagina foi elaborada exclusivamente para a disciplina de segurança da informação no IFSP Câmpus Guarulhos.</p>
                <p> Copyright&copy 2018 by SecurityLabs (Prof. Robson) </p>
            </fieldset>
        </footer>
    </div>
</body>
</html>
