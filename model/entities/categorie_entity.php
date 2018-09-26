<?php

function insertCategorie(string $titre) {
    global $connection;

    $query = "INSERT INTO categorie (contenu,) VALUES (:titre)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':titre', $titre);
    $stmt->execute();
}
