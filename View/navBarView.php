<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
        <?php if (!isset($_SESSION['user'])):?>
            <li class="nav-item active">
                <a class="nav-link active" href="login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register">Register</a>
            </li>
        <?php endif;?>
        <li class="nav-item">
            <a class="nav-link" href="annonces">Les Annonces</a>
        </li>
        <?php if (isset($_SESSION['user'])):?>
            <li class="nav-item">
                <a class="nav-link" href="creerAnnonce">Créer une Annonce</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mesAnnonces">Mes Annonces</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profil">Mon profil</a>
            </li>
            <li class="nav-item">
                <a href="deco" class="btn btn-danger" role="button">Déconnexion</a>
            </li>
        <?php endif;?>
    </ul>
    <?php if (isset($_SESSION['user']['name'])):?>
    <span class="navbar-text">
        Connecter en tant que <?= $_SESSION['user']['name']?>
    </span>
    <?php endif;?>
  </div>
</nav>