<?php

//Dados de exemplo para demonstração
$produtos = [
    ["nome" => "Picanha na Chapa", "vendas" => 15000.00],
    ["nome" => "Cerveja Artesanal", "vendas" => 8000.00],
    ["nome" => "Hambúrguer da Casa", "vendas" => 6500.00],
    ["nome" => "Porção de Tilápia", "vendas" => 4200.00],
    ["nome" => "Escondidinho de Carne Seca", "vendas" => 3800.00],
    ["nome" => "Macarrão à Bolonhesa", "vendas" => 3500.00],
    ["nome" => "Suco Natural", "vendas" => 2000.00],
    ["nome" => "Refrigerante 2L", "vendas" => 1800.00],
    ["nome" => "Salada Caesar", "vendas" => 1500.00],
    ["nome" => "Batata Frita", "vendas" => 1300.00],
    ["nome" => "Pudim Simples", "vendas" => 1200.00],
    ["nome" => "Caipirinha", "vendas" => 900.00],
    ["nome" => "Sorvete de Creme", "vendas" => 600.00],
    ["nome" => "Água Mineral", "vendas" => 450.00],
    ["nome" => "Café Expresso", "vendas" => 250.00]
];

// Calcula o faturamento total somando a coluna 'vendas' de todos os arrays internos
$faturamentoTotal = array_sum(array_column($produtos, 'vendas'));
?>