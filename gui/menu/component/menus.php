<?php

function isActivePage($comparePage, $currentPage)
{
    if(substr_compare($comparePage, $currentPage, 0) == 0)
    {
        echo ' class="active"';
    }
}

?>

<nav>
    <ul class="nav nav-pills nav-stacked">
        <li role="presentation" <?php isActivePage('home', $currentPage)?> ><a href="../home/index2.php">Accueil</a></li>
        <li role="presentation" <?php isActivePage('creation', $currentPage)?> ><a href="../creation/creation.php">Création de batiment</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
    </ul>
</nav>