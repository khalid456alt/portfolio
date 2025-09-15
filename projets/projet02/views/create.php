<?php
$title = "Ajouter stagiaire";
$title_T = "Ajouter stagiaire";
ob_start();
?>
    <form action="index.php?action=store" method="post">
         <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" id="nom" required>
        </div>
        <div class="mb-3">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" name="prenom" id="prenom" required>
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Âge</label>
          <input type="number" class="form-control" name="age" id="age" required>
        </div>
        <div class="mb-3">
          <label for="login" class="form-label">Login</label>
          <input type="text" class="form-control" name="login" id="login" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Ajouter" name="Ajouter">
        </div>
    </form>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>