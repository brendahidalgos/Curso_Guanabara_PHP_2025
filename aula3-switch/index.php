<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Escolha - Switch</title>
</head>
<body>
    <form action="exercicio01.php" method="get">
        numero: <input type="number" name="num" id="idnum"><br>
        <fieldset>
            <legend> Operação</legend>
            <input type="radio" name="oper" id="dobro">
            <label for="dobro">Dobro</label>
            <input type="radio" name="oper" id="cubo">
            <label for="cubo">Cubo</label>
            <input type="radio" name="oper" id="raiz">
            <label for="raiz">Raiz</label>
        </fieldset>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>