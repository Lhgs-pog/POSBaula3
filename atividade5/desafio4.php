<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Extrato de Lanches</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #fff9db;
            display: flex;
            justify-content: center;
            padding: 40px;
        }
        .wallet-card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 { color: #f39c12; text-align: center; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th { background-color: #f8f9fa; color: #7f8c8d; font-size: 0.8rem; text-transform: uppercase; }
        td, th {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        .price { color: #e74c3c; font-weight: bold; }
        .balance { color: #27ae60; font-weight: bold; }
    </style>
</head>
<body>

    <div class="wallet-card">
        <h2>Histórico de Lanches</h2>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Saldo Atual</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $saldo = 50;

                    // Enquanto o saldo for suficiente para comprar e ainda sobrar 10...
                    while($saldo - 10 >= 10) {
                        echo "<tr>
                                <td>Lanche</td>
                                <td class='balance'>R$ $saldo</td>
                              </tr>";
                        
                        $saldo -= 10; // Subtrai 10 do saldo atual
                    }
                ?>
            </tbody>
        </table>
        <p style="text-align: center; margin-top: 20px; color: #7f8c8d;">
            Saldo final: <strong>R$ <?php echo $saldo; ?></strong><br>
            <small>(Limite de segurança atingido)</small>
        </p>
    </div>

</body>
</html>