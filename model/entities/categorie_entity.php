<?php

function insertCategorie(string $titre) {
    global $connection;

    $query = "INSERT INTO categorie (titre) VALUES (:titre)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':titre', $titre);
    $stmt->execute();
}

function updateCategorie(string $titre, $id) {
    global $connection;

    $query = "UPDATE categorie SET categorie.titre = (:titre) WHERE categorie.id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

function deleteCategorie($id) {
    global $connection;

    $query = "DELETE FROM categorie WHERE categorie.id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
