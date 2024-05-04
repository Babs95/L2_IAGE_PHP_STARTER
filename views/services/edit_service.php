<?php
require('../../actions/services/editServiceAction.php');
$service = true;
include_once '../../header.php';
include_once '../../navbar.php';
?>

<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Modification Service</h1>
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
        <?php if(isset($libelle)): ?>
            <form class="row g-3" method="POST">
                <div class="col-md-6">
                    <label for="inputLibelle" class="form-label">Libelle</label>
                    <input type="text" class="form-control" name="libelle" value="<?= $libelle ?>">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="envoyer">Enregistrer</button>
                </div>
            </form>
        <?php endif ?>
    </div>
</main>

<?php
include_once '../../footer.php'
?>