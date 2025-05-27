<?php
// Simulação de dados do usuário (substitua pelo seu sistema de autenticação)
$user = [
    'nome' => isset($_SESSION['nome']) ? $_SESSION['nome'] : $nome,
    'email' => isset($_SESSION['email']) ? $_SESSION['email']: $email,
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/global.css">
    <title>Perfil do Usuário</title>

</head>
<body>
    <div class="perfil-container">
        <div class="perfil-nome"><?php echo htmlspecialchars($user['nome']); ?></div>
        <div class="perfil-email"><?php echo htmlspecialchars($user['email']); ?></div>

    </div>
</body>
</html>