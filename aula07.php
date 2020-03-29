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
            <h1> Aula07. <br/></h1>
            Funções:<br>
            * Passagem de parâmetro por valor;<br>
            * Passagem de parâmetro por referência;<br>
            * Funções Recursivas;<br>
        <br>
        </header>
        <hr>
        <?php
            //Funçoes
            function salario($valor){
                $valor += 5;
                echo "*** Passagem de parâmetro para função por valor*** <br>";
                echo "Salário com aumento: $valor <br>";
            } 
    
            function salarioa(&$valor){
            $valor += 10;
            echo "*** Passagem de parametro para função por referência*** <br>";
            echo "Salário com aumento: $valor <br>";
            }

            function exibe($num, $conta) {
                if($num != 100) {
                    echo "Em conta: $conta,Taxa: $num <br>";
                    $conta += $conta*(($num)/100);
                    $num += 10;
                    exibe($num, $conta);
                }
            }

            //Programa
            $salatual = 8200;
            salario($salatual);
            echo "Salário sem aumento 'valor': $salatual <br>";
            echo "<br>";
            echo "<br>";
            $salatual = 8200;
            salarioa($salatual);
            echo "Salário sem aumento 'Referência': $salatual <br>";
    
            echo "<br>";
            echo "*** Função recursiva*** <br>";
            $taxa = 10;
            $saldo = 3500;
            exibe($taxa, $saldo);
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

