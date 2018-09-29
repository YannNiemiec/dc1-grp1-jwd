

<?php
require_once '../../layout/header.php';
$liste_categorie = getAllEntities("categorie");
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Gestion des catégories</h1>
</div>

<a href="create.php" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Ajouter
</a>

<hr>

<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Titre</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_categorie AS $categorie): ?>
        <tr>
            <td><?php echo $categorie["titre"]?></td>
            <td>
                <a href="update.php?id=<?php echo $categorie['id'] ?>" class="btn btn-success">
                    <i class="fa fa-edit"></i>
                    Update
                </a>
                <a href="delete_query.php?id=<?php echo $categorie['id'] ?>" class="btn btn-danger">
                    <i class="fa fa-minus"></i>
                    Supprimer
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>

