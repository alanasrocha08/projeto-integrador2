<?php
session_start();
$carrinho = $_SESSION['carrinho'] ?? [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['excluir_produto'])) {
    $produto_id = $_POST['produto_id'];
    unset($_SESSION['carrinho'][$produto_id]);
    header("Location: carrinho.php");
    exit;





















    
}

require_once "../includes/cabecalho.php";
?>

<div>
    <h2>Seu Carrinho</h2>
    <ul>
        <?php foreach ($carrinho as $item): ?>
            <li><?= htmlspecialchars($item['nome']) ?> - Quantidade: <?= $item['quantidade'] ?></li>
        <?php endforeach; ?>
    </ul>

    <form action="carrinho.php" method="post" style="display:inline;">
  <input type="hidden" name="produto_id" value="<?= $id ?>">
  <button type="submit" name="excluir_produto" class="remove-all" aria-label="Remover produto do carrinho">Remover</button>
</form>
</div>


<?php require_once "../includes/rodape.php"; ?>