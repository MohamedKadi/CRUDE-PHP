
<?php
$title = "Liste des stagiaire";


ob_start();
?>
<a href="create.php" class="btn btn-primary">Ajouter</a>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>login</th>
        <th>password</th>
    </tr>
    </thead>
    <tbody>
    <?php

    foreach (listeStagiairesAction() as $stagaire):
        ?>
        <tr>
            <td><?= $stagaire->id ?></td>
            <td><?= $stagaire->nom ?></td>
            <td><?= $stagaire->prenom ?></td>
            <td><?= $stagaire->age ?></td>
            <td><?= $stagaire->login ?></td>
            <td><a href="delete.php?id=<?php echo $stagaire->id ?>" class="btn btn-danger">Supprimer</a></td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>
<?php $content = ob_get_clean(); ?>
<?php
include_once 'views/layout.php';
?>
