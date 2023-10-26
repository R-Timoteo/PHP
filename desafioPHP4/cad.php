<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>
            Resultado do Processamento
        </h1>
    </header>
    <main>
        <?php 

        $real = $_GET["valor"];

        $url = file_get_contents('https://www.google.com/finance/quote/USD-BRL?sa=X&sqi=2&ved=2ahUKEwjaufPE9YCCAxXERLgEHQ7PBdEQmY0JegQICBAr');
        preg_match_all('/div class="YMlKec fxKbKc">(.*?)\/div/s', $url , $matches);
        $dol = (double)$matches [1][0];
        $cambio = $dol/$real;
        echo $real . "$ Corresponde a " . (number_format("$cambio", 2, ",",".")) ."$ em Dolar ";
         
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>

</body>
</html>