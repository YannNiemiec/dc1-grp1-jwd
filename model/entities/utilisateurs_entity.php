<?php

function getUserByEmailMDP(string $email, string $mdp) {
    global $connection;

    $query = "SELECT * FROM utilisateur WHERE email = :email AND mdp = SHA1(:mdp)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->execute();

    return $stmt->fetch();
}
