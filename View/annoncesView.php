<h1>Annonces Disponibles</h1>

<?php if($tabAnnonces === NULL):?>
    <h2>Aucune annonce disponible</h2>
<?php endif;?>

<?php foreach ($tabAnnonces as $annonce):?>
    <h2><?= $annonce['titre']?></h2>
    <p><?= $annonce['prix']?></p>
    <p><?= $annonce['id_user']?></p>
    <a href="/annonce?id=<?=$annonce['id']?>">Voir les détails</a>
    <a href="/contactAnnonce?id=<?=$annonce['id']?>&id_user=<?=$annonce['id_user']?>">Contacter le créateur</a>
<?php endforeach;?>