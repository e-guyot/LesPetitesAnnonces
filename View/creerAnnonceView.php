<h1> Créer une annonce </h1>

<div class="container">
<form action="creerAnnonce" method="post">

<div class="form-group">
    <label for="exampleInputEmail1">Titre :</label>
    <input type="text" class="form-control" name="titre">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description :</label>
    <input type="text" class="form-control" name="desc">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date de fin :</label>
    <input type="date" class="form-control" name="date_fin">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">prix :</label>
    <input type="int" class="form-control" name="prix">
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
  <button type="submit" >Enregistrer</button>
  </form>
  </div>