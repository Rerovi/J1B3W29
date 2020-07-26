<?php
require 'resources/includes/header.php';
require 'resources/includes/data.php';
$locations = getAllLocations();

?>
    <header>
        <h1>Alle <?echo count($locations); ?> locaties uit de database</h1>
    </header>
    <div id="container">
        <?
        echo "<h2>Names:</h2>";
        foreach ($locations as $location) {
            echo $location ["name"]."<br><br>";
        }
            ?>
    </div>
<?
require 'resources/includes/footer.php';