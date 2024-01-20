<?php
$docteur = true;
include_once '../../header.php';
require('../../Database/docteur_db.php');

$docteurs = getAllDocteurs();
?>

<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Docteurs</h1>
        <a href="add_docteur.php" type="button" class="float-end mb-2 btn btn-primary">
            Nouveau
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg>
        </a>
        <?php
        if (isset($_GET['message'])) {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $_GET['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>
        <table id="myDataTable" class="display">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Service</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($docteur = $docteurs->fetch(PDO::FETCH_OBJ)) : ?>
                    <tr>
                        <td><?= $docteur->id ?></td>
                        <td><?= $docteur->nom ?></td>
                        <td><?= $docteur->prenom ?></td>
                        <td><?= $docteur->email ?></td>
                        <td><?php echo $docteur->adresse ?></td>
                        <td><?php echo $docteur->tel ?></td>
                        <td><?php echo $docteur->service_libelle ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</main>

<?php
include_once '../../footer.php'
?>