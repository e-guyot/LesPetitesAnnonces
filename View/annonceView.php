<h1>Annonce : <?= $tabAnnonce['titre']?></h1>

<?php if($tabAnnonce === NULL):?>
    <h2>Pas de détails disponible</h2>
<?php endif;?>

    <p><?= $tabAnnonce['contenu']?></p>
    <p><?= $tabAnnonce['prix']?></p>

<form action="../Controller/mailController" method="post">
	<input type="hidden" name="annonceTitre" value="<?= $tabAnnonce['titre']?>">
	<input type="hidden" name="userId" value="<?= $tabAnnonce['id_user']?>">
	Message: <input type="text" name="content">
	<input type="submit">
</form>