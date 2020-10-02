<h1>Annonces Disponibles</h1>

<?php if($tabAnnonces === NULL || empty($tabAnnonces)):?>
    <div class="alert alert-primary" role="alert">
        Aucune Annonce disponible
    </div>
<?php else :?>

    <?php foreach ($tabAnnonces as $annonce):
        if ($annonce['id_user'] === $_SESSION['user']['id']):?>
            <h2><?= $annonce['titre']?></h2>
            <a href="/modifAnnonce?id=<?=$annonce['id']?>">Modifier</a>
        <?php else:?>
            <h2><?= $annonce['titre']?></h2>
            <p><?= $annonce['prix']?></p>
            <p><?= $annonce['id_user']?></p>
            <a href="/annonce?id=<?=$annonce['id']?>">Voir les détails</a>
            <a href="/contactAnnonce?id=<?=$annonce['id']?>&id_user=<?=$annonce['id_user']?>">Contacter le créateur</a>
        <?php endif;?>
    <?php endforeach;?>

<?php endif;?>