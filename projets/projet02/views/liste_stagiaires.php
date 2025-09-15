<?php
$title = "Liste des stagiaires";
$title_T = "Liste des stagiaire";


ob_start();
?>
    <table class="table table-hover mb-0">
        <thead  class="table-light">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Age</th>
            <th>Login</th>
            <th>Actions</th>
        </tr>

        </thead>
        <tbody>
        <?php foreach ($stagiaires as $stagiaire): ?>
            <tr>
                <td><?= $stagiaire->id ?></td>
                <td><?= $stagiaire->nom ?></td>
                <td><?= $stagiaire->prenom ?></td>
                <td><?= $stagiaire->age ?></td>
                <td><?= $stagiaire->login ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $stagiaire->id?>" class="btn btn-success btn-sm">Modifier</a>
                    <a href="index.php?action=delete&id=<?php echo $stagiaire->id?>" class="btn btn-danger btn-sm">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>