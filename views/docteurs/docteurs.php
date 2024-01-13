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
        <table id="myDataTable" class="display">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
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
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</main>

<?php
include_once '../../footer.php'
?>