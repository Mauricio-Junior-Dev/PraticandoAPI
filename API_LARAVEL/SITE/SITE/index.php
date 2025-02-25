<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora API</title>
</head>

<body>

    <div>
        <label>Escolha uma operação:</label>
        <select id="op">
            <option value="1">Soma</option>
            <option value="2">Subtração</option>
            <option value="3">Multiplicação</option>
            <option value="4">Divisão</option>
        </select>
    </div>
    <div>
        <label>Numero 1</label>
        <input type="number" id="num1" required>
    </div>
    <div>
        <label>Numero 2</label>
        <input type="number" id="num2" required>
    </div>
    <div>
        <button id="enviar" onclick="enviar();">Enviar</button>
    </div>


    <div>
        <p id="resp"></p>
    </div>


    <div>
        <a href="php/listar.php" id="listar">Buscar</a>
    </div>


    <script src="script.js"></script>
</body>

</html>