<?php
require_once '../../security.php';

$id = $_POST['id'];
$titre = $_POST["titre"];

updateCategorie($titre, $id);

header('Location: index.php');
