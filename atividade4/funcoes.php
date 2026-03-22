<?php

//Padroniza exibição das moedas
function formatarMoeda($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}

//Calcula conevnção de produtos
function analisarDesempenho($vendaItem, $faturamentoTotal) {
    if ($faturamentoTotal == 0) return "Faturamento zerado";
    $porcentagem = ($vendaItem / $faturamentoTotal) * 100;
    return ($porcentagem < 10) ? "ALERTA: Baixa Conversão" : "Produto Estrela";
}

//Cria o card de exibição dos produtos
function gerarCardHTML($nome, $preco, $mensagemBI) {
    $nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8'); //Input do usuário seguro
    $corMensagem = ($mensagemBI === "Produto Estrela") ? "#28a745" : "#dc3545";
    $corBorda = ($mensagemBI === "Produto Estrela") ? "#c3e6cb" : "#f5c6cb";
    $bgCard = ($mensagemBI === "Produto Estrela") ? "#d4edda" : "#f8d7da";

    //Estrutura do  card
    return "
    <div class='card-bi' style='border-color: {$corBorda}; background-color: {$bgCard};'>
        <h3>{$nome}</h3>
        <p><strong>Faturamento:</strong> {$preco}</p>
        <p class='badge' style='background-color: {$corMensagem};'>{$mensagemBI}</p>
    </div>
    ";
}
?>