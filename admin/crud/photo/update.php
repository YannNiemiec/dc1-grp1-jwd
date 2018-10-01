<?php 
require_once '../../layout/header.php';
$id = $_GET['id'];
$categorie = getEntity('categorie', $id);
?>

<h1>Update d'une catégorie</h1>

<form action="update_query.php" method="POST">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" value="<?php echo $categorie['titre'] ?>" class="form-control" placeholder="Titre" required>
    </div>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <button type="submit" class="btn btn-success">
        <i class="fa fa-edit"></i>
        Update
    </button>
</form>

<?php require_once '../../layout/footer.php' ?>

