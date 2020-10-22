<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/estilo.css"></link>
</head>
<body>
    <table border='1'>
        <tr>
            <td><button class="button" type ='button' name="limpar" value="limpar" onclick="limpar()">AC</button></td>
            <td colspan="3"><form name="tela1"><input class="input" name="tela2"/></form></td>
        </tr>
        <tr>
            <td><button class="button" type ='button' name="7" value="7" onclick="inserir(7)">7</button></td>
            <td><button class="button"type ='button' name="8" value="8" onclick="inserir(8)">8</button></td>
            <td><button class="button"type ='button' name="9" value="9" onclick="inserir(9)">9</button></td>
            <td><button class="button"type ='button' name="/" value="/" onclick="inserir('/')">/</button></td>
        </tr>
        <tr>
            <td><button class="button"type ='button' name="4" value="4" onclick="inserir(4)">4</button></td>
            <td><button class="button"type ='button' name="5" value="5" onclick="inserir(5)">5</button></td>
            <td><button class="button"type ='button' name="6" value="6" onclick="inserir(6)">6</button></td>
            <td><button class="button"type ='button' name="*" value="*" onclick="inserir('*')">*</button></td>
        </tr>
        <tr>
            <td><button class="button"type ='button' name="1" value="1" onclick="inserir(1)">1</button></td>
            <td><button class="button"type ='button' name="2" value="2" onclick="inserir(2)">2</button></td>
            <td><button class="button"type ='button' name="3" value="3" onclick="inserir(3)">3</button></td>
            <td><button class="button"type ='button' name="-" value="-" onclick="inserir('-')">-</button></td>
        </tr>
        <tr>
            <td><button class="button"type ='button' name="0" value="0" onclick="inserir(0)">0</button></td>
            <td><button class="button"type ='button' name="." value="." onclick="inserir('.')">.</button></td>
            <td><button class="button"type ='button' name="=" value="=" onclick="resultados('=')">=</button></td>
            <td><button class="button"type ='button' name="+" value="+" onclick="inserir('+')">+</button></td>
        </tr>
    </table>
    <script src="js/calculando.js"></script>
</body>
</html>