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
        $dol = $real/5;
        

        echo $real . "$ Corresponde a " . $dol . "$ em Dolar ";
        
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>

</body>
</html>