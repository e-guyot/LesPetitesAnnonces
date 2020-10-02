<h1> Modifier son profil </h1>

<div class="container">
<form>

<div class="form-group">
    <label for="exampleInputEmail1">Nom :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $_SESSION['user']['name']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse mail :</label>
    <input type="email" class="form-control" id="exampleInputEmail1" value="<?= $_SESSION['user']['email']?>">
  </div>
  <h2>Changer de mot de passe</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Mot de passe actuel :</label>
    <input type="password" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nouveau mot de passe :</label>
    <input type="password" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Vérification du nouveau mot de passe :</label>
    <input type="password" class="form-control" id="exampleInputEmail1">
  </div>
  </form>
  </div>