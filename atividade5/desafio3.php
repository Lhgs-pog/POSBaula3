<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contagem Regressiva</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
            background-color: #f4f4f9;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .contagem {
            color: #e63946;
            font-weight: bold;
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Status da decolagem:</h1>
        
        <?php
            for($contagem = 10; $contagem != 0; $contagem--) {
                echo "<p class='contagem'>Lançamento em $contagem...</p>";
            }
        ?>

        <hr>
        <h2>Decolar!</h2>
    </div>

</body>
</html>