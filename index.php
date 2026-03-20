<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
    <!--Css do bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!--Css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Navbar-->
    <div class="apple-card text-center">
        <div>
            <img src="" alt="">
            <h2>Recursividade em php</h2>
        </div>
        <p class="">Insira um número para calcular o fatorial</p>
    </div>

    <!--Formulário do fatorial-->
    <div class="main-form text-center">
        <form action="utils.php" method="post">
            <div class="mb-4">

                <label for="numero" class="text-center">Digite o número</label><br>
                <input type="number" name="numero" class="form-control text-center" id="" placeholder="Ex: 5" min="1" required>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-apple ">Enviar</button>
                </div>
            </div>
        </form>
    </div>


    <!--Script do bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>