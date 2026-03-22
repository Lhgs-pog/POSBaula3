<?php
require_once 'funcoes.php';
require_once 'dados.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard BI - Relatório de Alertas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <!--MENU LATERAL-->
        <?php include 'lateral.php'; ?>

        <main class="main-content">
            <!--TITULO-->
            <header>
                <h1>⚠️ Relatório de Alertas</h1>
                <p>Abaixo estão apenas os produtos com <strong>Baixa Conversão</strong> (fatia menor que 10% do faturamento total de <?= formatarMoeda($faturamentoTotal) ?>).</p>
            </header>
            
            <!--CARDS-->
            <div class="cards-grid">
                <?php
                // Percorrendo os produtos
                foreach ($produtos as $prod) {
                    $mensagem = analisarDesempenho($prod['vendas'], $faturamentoTotal);
                    
                    // Só mostra os produtos de baixa convenção
                    if ($mensagem === "ALERTA: Baixa Conversão") {
                        $precoFormatado = formatarMoeda($prod['vendas']);
                        echo gerarCardHTML($prod['nome'], $precoFormatado, $mensagem);
                    }
                }
                ?>
            </div>
        </main>
    </div>
</body>
</html>