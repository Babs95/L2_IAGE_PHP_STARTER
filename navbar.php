<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/index.php">L2IAGE HOSPITAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link <?php echo !empty($index) ? "active" : ""; ?>" aria-current="page" href="/index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo !empty($docteur) ? "active" : ""; ?>" href="/views/docteurs/docteurs.php">Docteurs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo !empty($service) ? "active" : ""; ?>" href="/views/services/services.php">Services</a>
          </li>
          <?php if($_SESSION['profil'] == 1): ?>
          <li class="nav-item">
            <a class="nav-link <?php echo !empty($user) ? "active" : ""; ?>" href="/views/users/users.php">Utilisateurs</a>
          </li>
          <?php endif ?>
        </ul>
        <form class="d-flex" role="search">
          <a href="/actions/auth/logoutAction.php" class="btn btn-outline-success" type="submit">Se Déconnecter</a>
        </form>
      </div>
    </div>
  </nav>
</header>