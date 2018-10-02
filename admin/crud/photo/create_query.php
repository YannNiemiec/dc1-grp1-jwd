<?php
require_once '../../security.php';

$titre = $_POST["titre"];
$image = $_POST["image"];
$description = $_POST["description"];
$categorie = $_POST["categorie_id"];

insertPhoto($titre, $image, $description, $categorie);

header('Location: index.php');


