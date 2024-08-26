<?php
include 'Aluno.php';

$nome = '';
$media = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $nota1 = isset($_POST['nota1']) ? floatval($_POST['nota1']) : 0;
    $nota2 = isset($_POST['nota2']) ? floatval($_POST['nota2']) : 0;
    $nota3 = isset($_POST['nota3']) ? floatval($_POST['nota3']) : 0;
    $nota4 = isset($_POST['nota4']) ? floatval($_POST['nota4']) : 0;

    $aluno = new Aluno();
    $aluno->setDados($nome, $nota1, $nota2, $nota3, $nota4);

    $nome = $aluno->getNome();
    $media = $aluno->getMedia();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Média</title>
</head>
<body>
    <h1>Calculadora de Média do Aluno</h1>
    <form method="post" action="">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" required><br><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" required><br><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" name="nota3" required><br><br>

        <label for="nota4">Nota 4:</label>
        <input type="number" id="nota4" name="nota4" required><br><br>

        <input type="submit" value="Calcular Média">
    </form>

    <?php if ($media !== null): ?>
        <h2>Nome do Aluno: <?php echo htmlspecialchars($nome); ?></h2>
        <h2>Média do Aluno: <?php echo number_format($media, 2); ?></h2>
    <?php endif; ?>
</body>
</html>

