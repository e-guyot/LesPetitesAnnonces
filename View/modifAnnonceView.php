<h1> Modifier son Annonce n° <?=$_GET['id'] ?></h1>

<div class="container">
    <form action="modifAnnonce?id=<?= $_GET['id'] ?>" method="post">

        <div class="form-group">
            <label for="exampleInputEmail1">titre :</label>
            <input type="text" class="form-control" name="titre" value="<?= $tabUneAnnonce['titre']?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Contenu :</label>
            <input type="text" class="form-control" name="contenu" value="<?= $tabUneAnnonce['contenu']?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prix :</label>
            <input type="int" class="form-control" name="prix" value="<?= $tabUneAnnonce['prix']?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Photo 1</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Photo 2</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Photo3</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <input type="hidden" name="id_annonce" value="<?=$_GET['id']?>" >
        <button type="submit">Valider les modifications</button>
    </form>
</div>