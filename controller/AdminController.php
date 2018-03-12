<?php
/**
<<<<<<< HEAD
 * Contrôleur gérant les articles
 */
// chargement des modeles


=======
 * Contrôleur gérant l'adùministration
 */

// chargement des modeles
>>>>>>> 15bc1cd096eaba534091e16e1853024b5659d809
require_once "modeles/ArticleModele.php";

// on récupère les résumés d'articles depuis arti
$articles = listeArtiAccueil($mysqli);

// on prend la vue
require_once "vues/Admin.html.php";
<<<<<<< HEAD

=======
>>>>>>> 15bc1cd096eaba534091e16e1853024b5659d809
