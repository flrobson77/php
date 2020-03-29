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
            <h1> Aula03 <br/></h1>
        Operadores:<br>
            *Aritméticos;<br>
            *Atribuição;<br>
            *Incremento/Decremento;<br>
        </header>
        <hr>
    <?php
        $a =2;
        $b =3;
        $c =4;
        echo "Operadores Aritméticos";
        echo "<br>";
        $result = $c + $a;
            echo "A soma entre " . $c . "+" . $a . "=" . $result;
        echo "<br>";
        $result = $c - $a;
            echo "A subtração entre " . $c . "-" . $a . "=" . $result;
        echo "<br>";
        $result = $c * $a;
            echo "A produto entre " . $c . "*" . $a . "=" . $result;
        echo "<br>";
        $result = $c / $a;
            echo "A quociente entre " . $c . "/" . $a . "=" . $result;
        echo"<br>";
        $result = $c % $a;
            echo "O resto da divisão entre " . $c . "%" . $a . "=" . $result;
       
        echo "<br>";
        echo "<br>";
        echo "Operadores Atribuição";
        echo "<br>";
        $a =2;
        $c =4;
        $c += $a;
            echo "O Resultado da soma eh: " . $c;
        echo "<br>";
        $c -= $a;
            echo "O resultado da subtracao eh: " . $c;
        echo "<br>";
        $c *= $a;
            echo "O resultado do produto eh: " . $c;
        echo "<br>";
        $c /= $a;
            echo "O quociente eh: " . $c;
        echo "<br>";
        $c %= $a;
            echo "O resto eh: " . $c;
        echo "<br>";
        $b = "Bom";
        $b .= "Dia!";
            echo $b;

        echo "<br>";
        echo "<br>";
        echo "Operadores Incremento/Decremento";
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
