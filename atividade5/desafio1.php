<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Avaliação</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }
        .nota {
            font-size: 3rem;
            font-weight: bold;
            margin: 10px 0;
            color: #333;
        }
        .status {
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .aprovado { background-color: #d4edda; color: #155724; }
        .reprovado { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>

    <div class="card">
        <h3>Nota do Aluno</h3>
        
        <?php
            $nota = 7.5;
            echo "<div class='nota'>$nota</div>";

            if($nota >= 6) {
                echo "<div class='status aprovado'>Aprovado</div>";
            } else {
                echo "<div class='status reprovado'>Reprovado, estude mais</div>";
            }
        ?>
    </div>

</body>
</html>