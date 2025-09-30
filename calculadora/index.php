<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
    <style>
        /* Reset básico */
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }

        h1 {
            color: #333333;
            margin-bottom: 25px;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #cccccc;
            font-size: 16px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .resultado {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #555555;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Calculadora</h1>

    <form method="POST" action="">
        <input type="number" name="num1" placeholder="Número 1" required>
        <input type="number" name="num2" placeholder="Número 2" required>

        <select name="operacao" required>
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>

        <button type="submit">Calcular</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];
    $resultado = 0;

    switch ($operacao) {
        case "somar":
            $resultado = $num1 + $num2;
            break;
        case "subtrair":
            $resultado = $num1 - $num2;
            break;
        case "multiplicar":
            $resultado = $num1 * $num2;
            break;
        case "dividir":
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Erro: divisão por zero!";
            }
            break;
    }

    echo "<h2>Resultado: $resultado</h2>";
    }
?>
</body>
</html>