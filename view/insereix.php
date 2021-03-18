<?php require "layout/header.php" ?>

<h1 class="text-center m-4">Insereix un producte</h1>
<?php if (isset($isRegistered)) : ?>
	<?php if (!$isRegistered) : ?>
		<div class="alert alert-danger" role="alert">
			Error al inserir el producte a la base de dades!
		</div>
	<?php endif ?>
<?php endif ?>

<?= $form->show() ?>

<?php require "layout/footer.php" ?>