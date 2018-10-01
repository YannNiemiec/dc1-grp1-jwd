<?php
session_start();

require_once __DIR__ . '/../model/database.php';

$user = NULL;

if (isset($_SESSION['id'])) {
    // L'utilisateur s'est déjà connecté
    $user = getEntity('utilisateur', $_SESSION['id']);
} else if (isset($_POST['email']) && ($_POST['password'])) {
    // L'utilisateur essaie de se connecter
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = getUserByEmailMDP($email, $password);
    
    if ($user) {
        // Si l'utilisateur est connecté, on l'enregistre dans la session
        $_SESSION['id'] = $user['id'];
    }
}

if (!$user) {
    header('Location: login.php');
} 
//else if (!$user['admin']) {
   // header('Location: ../');
//}

