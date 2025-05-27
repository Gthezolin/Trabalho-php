<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR"
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pagina inicial </title>
</head>
<body>
    <h1> Bem-Vindo, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
    <a href="logout.php"> Sair</a>
</body>

</html>
