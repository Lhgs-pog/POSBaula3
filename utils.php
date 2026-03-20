<?php
    //Iniciando as variáveis
    $numero =0;

    //Função recursiva com parametro $n
    function fatorial($n){
        if($n <= 1){
            return 1;
        }
        return $n * fatorial($n -1);
    }

    //CAptura a requisição e verifica se é um post
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $numero = $_POST['numero'] ?? 0;
        //Verifica se o número é válido
        if($numero <= 0){
            echo 'O número digitado é menor do que 0';
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <!--Css do bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!--Css local-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!--Navbar-->
    <div class="apple-card text-center">
        <h2>Resultado</h2>
    </div>

    <!--Exibição dos resultados-->
    <div class="main-form text-center">
        <form action="utils.php" method="post">
            <div class="mb-4">

                <label for="numero" class="text-center">O resultado do fatorial <?php echo htmlspecialchars($numero) . ' é :'?></label><br>
                <h3 class="resultado">
                    <?php echo htmlspecialchars(fatorial($numero)) ?>
                </h3>

                <!--Redireciona para o index-->
                <a href="index.php">Calcular de novo</a>
            </div>
        </form>
    </div>

    <!--Script do bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>