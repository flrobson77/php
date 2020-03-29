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
            <h1> Aula05 <br/></h1>
            Estruturas de Repetição<br>
                *While;<br>
                *Do... While;<br>
                *For...;<br>
        </header>
        <hr>
    <?php
        $CON = 1;
        echo "Vamos aprender estrutura de repetição usando uma API de
        Star Wars que pode encontrar no site http://https://swapi.co <br>";
        echo "<br>";
        echo "<br>";
        echo "Usando a estrutura de repetição WHILE <br>";
        echo "Principais personagens <br>";
        while ($CON <=10) {
            $json = file_get_contents("https://swapi.co/api/people/$CON/?format=json");
            $json_data = json_decode($json, true);
            echo $CON . " " . $json_data["name"] . " " . $json_data["height"] . "<br>";
            $CON++;
        }
        
        echo "<br>";
        echo "Usando a estrutura de repetição DO...WHILE <br>";
        echo "Os planetas <br>";
        $CON=1;
        do {
            $json = file_get_contents("https://swapi.co/api/planets/$CON/?format=json");
            $json_data = json_decode($json, true);
            echo $CON . " " . $json_data["name"] . " " . $json_data["population"] . "<br>";
            $CON++;
        } while($CON <=10);
        
        echo "<br>";
        echo "Usando a estrutura de repetição FOR <br>";
        echo "As naves <br>";
        for ($CON = 9; $CON <= 18; $CON++) {
            $json = file_get_contents("https://swapi.co/api/starships/$CON/?format=json");
            $json_data = json_decode($json, true);
            echo ($CON-8) . " " . $json_data["name"] . " " . $json_data["model"] . "<br>";
        }
        
        echo "<br>";
        echo "Usando a estrutura de repetição FOR e FOREACH <br>";
        echo "As naves <br>";
        for ($CON = 9; $CON <= 18; $CON++) {
            $json = file_get_contents("https://swapi.co/api/starships/$CON/?format=json");
            $starwars = json_decode($json, true);
            foreach ($starwars as $star)
            {
                echo ($star. " ");
            }
            echo "<br>";
        }
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
