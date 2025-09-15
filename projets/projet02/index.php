<?php
require_once 'controller/stagiaire_controller.php';
// Création d'un routeur.
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            createAction();
            break;
        case 'list':
            indexAction();
            break;
        case 'destroy':
            destroyAction();
            break;
        case 'edit':
            editAction();
            break;
        case 'store':
            storeAction();
            break;
        case 'update':
            updateAction();
            break;
        case 'delete':
            deleteAction();
            break;
    }
}else{
    $title = "Index";
    $title_T = "Description du projet ";
    ob_start();
?>
<p>Ce projet est une <strong>application web PHP</strong> de gestion des <strong>stagiaires</strong>, développée en utilisant le modèle <strong>MVC (Modèle - Vue - Contrôleur)</strong> de manière simple et native, sans framework.</p>
<h5 class="mt-4 text-primary">🎯 Objectif :</h5>
<p>Permettre à un utilisateur de :</p>
<ul>
    <li>Ajouter un stagiaire</li>
    <li>Modifier les informations d’un stagiaire</li>
    <li>Supprimer un stagiaire</li>
    <li>Consulter la liste des stagiaires</li>
    <li>Voir les détails d’un stagiaire</li>
</ul>
<h5 class="mt-4 text-primary">🧱 Technologies utilisées :</h5>
<ul>
    <li>PHP natif</li>
    <li>HTML / CSS / Bootstrap</li>
    <li>Base de données MySQL</li>
    <li>Architecture MVC : séparation du code métier (Modèle), de l’affichage (Vue), et du traitement (Contrôleur)</li>
</ul>
<?php
    $content = ob_get_clean();
    include_once 'views/layout.php';
}