<?php require_once '../../layout/header.php' ?>
<?php $id = $_GET['id']; ?>

<h1>Update d'une catégorie</h1>

<form action="update_query.php?id=<?php echo $id ?>" method="POST">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control" placeholder="Titre" required>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-edit"></i>
        Update
    </button>
</form>

<?php require_once '../../layout/footer.php' ?>

