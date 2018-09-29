<?php
require_once '../../security.php';
$id = $_GET['id'];
$titre = $_POST["titre"];

updateCategorie($titre, $id);

header('Location: index.php');
