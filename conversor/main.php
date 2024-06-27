<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Resposta</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>Total de Dolares</h1>
    <?php 
    $numero= $_GET["numero"];
    $calculo= $numero/5.5;
    $dolar=round($calculo,2);
    echo "Voce tem o total de $ $dolar"
    ?>    
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>