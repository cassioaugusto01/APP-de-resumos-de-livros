<?php
// CAMPO select é: " . $_POST["livro"];
//echo "<br>O valor de CAMPO 1 é: " . $_POST["name"];
//echo "<br>O valor de CAMPO 2 é: " . $_POST["email"];

$livro = $_POST["livro"];

switch ($livro) {
        case "A Startup Enxuta":
            //código a ser executado se a expressão for igual ao valor
            echo "texto do resumo do livro lean startup aqui";
            break;
        case "SCRUM - Arte de Fazer o Dobro do Trabalho na Metade do Tempo":
            //código a ser executado se a expressão for igual ao valor2
            echo "texto do livro scrum aqui";
            break;
        case "SPRINT - O Método usado no Google para testar e aplicar novas ideias em apenas 5 dias":
        echo "texto do livro sprint aqui";
            //código a ser executado se a expressão for igual ao valorN
            break;
     }
    




?>