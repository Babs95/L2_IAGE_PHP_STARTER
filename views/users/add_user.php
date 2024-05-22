<?php
require('../../actions/utilisateurs/createUserAction.php');
$user = true;
include_once '../../header.php';
include_once '../../navbar.php';
include_once '../../Database/profil_db.php';

$profils = getAllProfils();
?>

<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Nouveau Utilisateur</h1>
        <?php
            if(isset($errorMessage)){
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo $errorMessage; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
            }
        ?>
        <form class="row g-3" method="POST">
            <div class="col-md-6">
                <label for="inputNom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="col-md-6">
                <label for="inputPrenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom">
            </div>
            <div class="col-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Entrer un email valide">
            </div>
          
            <div class="col-md-4">
                <label for="inputState" class="form-label">Profil</label>
                <select id="inputState" class="form-select" name="profil_id">
                    <option selected value="0">Séléctionner...</option>
                    <?php while ($profil = $profils->fetch(PDO::FETCH_OBJ)) : ?>
                        <option value="<?= $profil->id ?>">
                            <?= $profil->designation ?>
                        </option>
                    <?php endwhile ?>
                </select>
            </div>
            
            <div class="col-12">
                <button type="submit" name="send" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</main>

<?php
include_once '../../footer.php'
?>