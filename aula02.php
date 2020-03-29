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
            <h1> Aula02 <br/></h1>
            <p>
                Tipos de variáveis
            </p>
        </header>
        <hr>
    <?php
        $result = "11"; //Valor string
        echo "Variável como texto:" . $result . "<br>";
        var_dump($result);
        echo "<br>";
    
        echo "<br>";
        $result = $result + 1; //Valor inteiro
        echo "Conversão nao explicita:" . $result . "<br>";
        var_dump($result);
        echo "<br>";

        echo "<br>";
        $result = $result + 3.5; //Valor inteiro
        echo "Conversão nao explicita:" . $result . "<br>";
        var_dump($result);
        echo "<br>";

        echo "<br>";
        $result = "13"; //Valor string
        $result = (double) $result + 3.5; //Valor inteiro
        echo "Conversão explicita:" . $result . "<br>";
        var_dump($result);
        echo "<br>";

        echo "<br>";
        $result = "12.9"; //Valor string
        $result = (int) $result; //Valor inteiro
        echo "Conversão explicita:" . $result . "<br>";
        var_dump($result);
        echo "<br>";
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
