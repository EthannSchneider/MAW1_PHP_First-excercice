<?php
$title = "Acceuil";

ob_start();
?>

<h1>Error 404 - Not Found</h1>

<?php
$content = ob_get_clean();
require "View/gabarit.php";
?>