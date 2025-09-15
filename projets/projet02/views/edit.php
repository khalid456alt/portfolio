<?php
$title = "Modifier stagiaire";
$title_T = "Modifier stagiaire";

ob_start();
?>
    <form action="index.php?action=update" method="post">
         <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" id="nom"  value="<?= $stagiaire->nom ?>" required>
        </div>
        <div class="mb-3">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" name="prenom" id="prenom"  value="<?= $stagiaire->prenom ?>" required>
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Âge</label>
          <input type="number" class="form-control" name="age" id="age"  value="<?= $stagiaire->age ?>" required>
        </div>
        <div class="mb-3">
          <label for="login" class="form-label">Login</label>
          <input type="text" class="form-control" name="login" id="login"  value="<?= $stagiaire->login ?>" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" name="password" id="password"  value="<?= $stagiaire->password ?>" required>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary my-2" value="Modifier" name="modifier">
        </div>
    </form>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>