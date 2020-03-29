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
        $cliente = $_POST["txtnome"];
        $email = $_POST["txtmail"];
        echo "$cliente, Você acaba de entrar para o mundo das celebridades <br>";
        echo "Vai receber em seu e-mail: $email um link para um video exclusivo <br>";
    ?>
    <hr>
    <footer id="rodape">
        <h2> Exemplo de uso do método POST <br/> </h2>
        <p> Passagem de parametros pelo servidor</p>
        <fieldset>
            <p>Está pagina foi elaborada exclusivamente para a disciplina de segurança da informação no IFSP Câmpus Guarulhos<br>
            </p>
            <p> Copyright&copy 2018 by SecurityLabs (Prof. Robson) </p>
        </fieldset>
    </footer>
    </div>
</body>
</html>
    
