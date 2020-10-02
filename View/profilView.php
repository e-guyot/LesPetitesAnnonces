<h1> Modifier son profil </h1>

<div class="container">
<form action="/profil" method="post">

<div class="form-group">
    <label for="exampleInputEmail1">Nom :</label>
    <input type="text" class="form-control" name="name" value="<?= $_SESSION['user']['name']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse mail :</label>
    <input type="email" class="form-control" name="email" value="<?= $_SESSION['user']['email']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Téléphone :</label>
    <input type="tel" class="form-control" name="tel" value="<?= $_SESSION['user']['tel']?>">
  </div>
  <h2>Changer de mot de passe</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Mot de passe actuel :</label>
    <input type="password" class="form-control" name="mdpActuel">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nouveau mot de passe :</label>
    <input type="password" class="form-control" name="MdpNew">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Vérification du nouveau mot de passe :</label>
    <input type="password" class="form-control" name="MdpNew2">
  </div>
  <button type="submit">Valider les modifications</button>
  </form>
  </div>