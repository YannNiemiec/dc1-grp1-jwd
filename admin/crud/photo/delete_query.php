<?php

require_once '../../security.php';
$id = $_POST['id'];

$error = deleteEntity('categorie', $id);
if ($error) {
    header('Location: index.php?errcode='.$error->getCode());
    exit;
}

header('Location: index.php');
