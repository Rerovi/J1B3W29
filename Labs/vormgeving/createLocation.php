<?php
require 'resources/includes/header.php';
require 'resources/includes/data.php';
$locations = getAllLocations();


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    insertLocation($name);
    header('Location:locations.php');

}
?>
    <header>
        <h1>Location Create</h1>
    </header>
    <div id="container">
        <form method="POST">
            <label><b>Huidige Locatie:</b></label>
            <input type="text" value="name" name="name">
            <input type="submit" value="update">
        </form>
    </div>
<?
require 'resources/includes/footer.php';