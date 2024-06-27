<?php
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$media = ($nota1 + $nota2) / 2;

echo "<h2>Resultado</h2>";
echo "<p>Nome do aluno: $nome</p>";
echo "<p>Nota 1: $nota1</p>";
echo "<p>Nota 2: $nota2</p>";

if ($media >= 6) {
    echo "<p>Aluno aprovado com média $media</p>";
} else {
    echo "<p>Aluno reprovado com média $media</p>";
}
?>
