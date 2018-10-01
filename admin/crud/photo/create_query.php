<?php
require_once '../../security.php';

$titre = $_POST["titre"];

insertCategorie($titre);

header('Location: index.php');


