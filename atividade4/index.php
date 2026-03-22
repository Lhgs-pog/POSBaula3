<?php
require_once 'funcoes.php';
require_once 'dados.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard BI - Visão Geral</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--MENU LATERAL-->
    <div class="dashboard-container">
        <?php include 'lateral.php'; ?>

        <main class="main-content">
            <!--TITULO-->
            <header>
                <h1>Visão Geral do Faturamento</h1>
                <p>Faturamento Total do Mês: <strong><?= formatarMoeda($faturamentoTotal) ?></strong></p>
            </header>
            
            <!--APRESENTAÇÃO DOS CARDS-->
            <div class="cards-grid">
                <?php
                foreach ($produtos as $prod) {
                    $precoFormatado = formatarMoeda($prod['vendas']);
                    $mensagem = analisarDesempenho($prod['vendas'], $faturamentoTotal);
                    echo gerarCardHTML($prod['nome'], $precoFormatado, $mensagem);
                }
                ?>
            </div>
        </main>
    </div>
</body>
</html>