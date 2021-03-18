<?php require_once "layout/header.php" ?>

<h1 class="text-center m-4">La seva compra</h1>
<a class="btn btn-primary btn-lg m-2" href="index.php?m=insereix" role="button">Nou producte</a>

<?= $table->show() ?>

<?php require_once "layout/footer.php" ?>