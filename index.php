<?php
require('actions/services/searchServiceAction.php');
    $index = true;
    include_once './header.php';
    include_once './navbar.php';
?>

<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Dalal Ak Diam: <?php echo $_SESSION['prenom'] .' '. $_SESSION['nom'] .' '. $_SERVER['DOCUMENT_ROOT']; ?></h1>
        <form method="GET">
            <div class="form-group row mb-4">
                <div class="col-8">
                    <input type="search" placeholder="Rechercher un service" name="search" class="form-control">
                </div>
                <div class="col-4">
                    <button class="btn btn-success">Rechercher</button>
                </div>
            </div>
        </form>
        <!--<?php //print_r($_SERVER['DOCUMENT_ROOT'])
            ?>    -->

        <div class="container text-center">
            <div class="row">
                <?php if (isset($searchResults) && $searchResults->rowCount() > 0) : ?>
                    <?php foreach ($searchResults as $result) : ?>
                        <div class="col mb-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $result['nom'] . ' ' . $result['prenom'] ?></h5>
                                    <p class="card-text">Service: <?= $result['service_libelle'] ?></p>
                                    <a data-bs-toggle="modal" data-bs-target="#detailsModalDocteur<?= $result['id'] ?>" class="btn btn-primary">Voir Détail</a>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="detailsModalDocteur<?= $result['id'] ?>" tabindex="-1" aria-labelledby="detailsModalDocteurLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-5" id="detailsModalDocteurLabel">Détails
                                            Docteur</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <strong>Nom:</strong> <?= $result['nom'] ?>
                                                    </div>
                                                    <div class="mb-3">
                                                        <strong>Prénom:</strong> <?= $result['prenom'] ?>
                                                    </div>
                                                    <div class="mb-3">
                                                        <strong>Tel:</strong> <?= $result['tel'] ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <strong>Email:</strong> <?= $result['email'] ?>
                                                    </div>
                                                    <div class="mb-3">
                                                        <strong>Adresse:</strong> <?= $result['adresse'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Fermer
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php elseif (isset($word)) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Aucun résultat trouvé !
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</main>

<?php
    include_once './footer.php'
?>

