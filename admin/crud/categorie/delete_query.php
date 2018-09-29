<?php
require_once '../../security.php';
$id = $_GET['id'];

deleteCategorie($id);

header('Location: index.php');