<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</span></a>
        </li>
      
      <ul class="navbar-nav ml-auto">      
        <li><a class="nav-link" href="<?= hlien("database", "creer") ?>">Créer BDD</a></li>
        <li><a class="nav-link" href='<?= hlien("database", "dataset") ?>'>Jeu de données</a></li>
          <!-- <li><a class="nav-link" href="<?= hlien("authentification", "deconnexion") ?>">Déconnexion (<?=$_SESSION["uti_prenom"] . " " . $_SESSION["uti_nom"]?>)</a></li> -->
          <li><a class="nav-link" href="<?= hlien("authentification", "inscription") ?>">Inscription</a></li>
          <li><a class="nav-link" href='<?= hlien("authentification", "connexion") ?>'>Connexion</a></li>
      </ul>
    </div>
  </div>
</nav>