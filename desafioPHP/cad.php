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
        $n = $_GET["numero"];
        $ante = $n -1;
        $depois = $n +1;

        echo " <p> " . ($n-1) . " e o antecessor de <strong> $n </strong> Enquanto " . ($n+1) . " e seu Sucessor ";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>
    
</body>
</html>