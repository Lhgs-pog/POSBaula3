<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Menu Bancário</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #e9ecef;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }
        .menu-container {
            background: #fff;
            width: 350px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            font-weight: bold;
        }
        .option-box {
            padding: 20px;
            text-align: center;
            font-size: 1.2rem;
            border-bottom: 4px solid #3498db;
        }
        .msg-erro {
            color: #e74c3c;
            border-color: #e74c3c;
        }
        .footer {
            padding: 15px;
            font-size: 0.8rem;
            color: #7f8c8d;
            text-align: center;
            background: #f8f9fa;
        }
    </style>
</head>
<body>

    <div class="menu-container">
        <div class="header">SISTEMA BANCÁRIO</div>
        
        <div class="option-box">
            <?php
                $opcao = 2;

                switch($opcao){
                    case 1:
                        echo "Ver saldo";
                        break;
                    case 2: 
                        echo "Fazer depósito";
                        break;
                    case 3:
                        echo "Sacar dinheiro";
                        break;
                    default:
                        echo "<span class='msg-erro'> Opção inválida</span>";
                        break;
                }
            ?>
        </div>

        <div class="footer">
            Selecione uma opção no terminal para atualizar.
        </div>
    </div>

</body>
</html>