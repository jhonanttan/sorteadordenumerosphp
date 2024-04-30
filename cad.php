<!DOCTYPE html>
<html lang="en">
<head>desafio antecessor e sucessor copy
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Resultado do sorteio:</h1>
    </header>
    <main>
    <p>
        <?php 
            $begin = $_GET["begin"];
            $latest = $_GET["latest"];
            $randomNumber = rand($begin, $latest);
            
            echo "O número sorteado entre <strong>$begin</strong> e <strong>$latest</strong> foi:";
            echo "<br><strong>$randomNumber</strong>";
            ?>
    </p>
        <button onclick="javascript:document.location.reload()">&#x1F504;Gerar outro</button>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
    
</body>
</html>