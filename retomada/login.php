<?php
session_start();
include('conexao.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $senha = ($_POST['senha']);

        $sql = "SELECT * FROM usuario WHERE nome='$nome' AND senha='$senha'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){

            $_SESSION['nome'] = $nome;

            header('Location: index.php');

        } else {

            $error = "<p>Login ou senha errado se vira pra descobri qual</p>";

        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <title>My Movie (Meu fim de ano)</title>
</head>
<body>
    <div id="container">
        <h1>Logar-se te antes de chorar</h1>
        <form method="POST">
            <label>Nome</label>
            <input type="text" name="nome" required>
            <label>Senha</label>
            <input type="password" name="senha" required>
            <button type="submit" name="logar">Entrar</button>
        </form>
        <?php if(isset($error)){ echo "$error"; }?>
    </div>
</body>
</html>