<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Log de Conexão</title>
    <style>
        body {
            background-color: #121212;
            color: #00ff41; /* Verde clássico de terminal */
            font-family: 'Courier New', Courier, monospace;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }
        .terminal {
            background-color: #1e1e1e;
            border: 1px solid #333;
            border-radius: 5px;
            width: 80%;
            max-width: 600px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        .line {
            margin-bottom: 10px;
            border-left: 3px solid #00ff41;
            padding-left: 10px;
        }
        .status {
            color: #ffb100;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="terminal">
        <div style="color: #888; margin-bottom: 15px;">> Inicializando protocolo de rede...</div>

        <?php
            $tentativas = 1;

            do {
                echo "<div class='line'>[INFO] Tentativa de conexão número $tentativas...</div>";
            } while ($tentativas < 1);
        ?>

        <div class="status">
            > Processo finalizado com 1 execução obrigatória.
        </div>
    </div>

</body>
</html>