<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Article list</h1>

            <table>
            <?php foreach ($articles as $article) : ?>
                    <tr>
                        <td>
                            <h2><a href="article/<?= $article['url'] ?>"><?= $article['title'] ?></a></h2>
                            <a href="create.php" class="btn btn-success">Créer</a>
                            <a href="update.php" class="btn btn-primary">Modifier</a>
                            <a href="delete.php" class="btn btn-danger">Supprimer</a>
                            <p><?= $article['text'] . $article['date'] ?></p>
                            <h6>Catégorie :<?= $article['categorie_id'] ?></h6> 
                        </td>
                    </tr>
            <?php endforeach ?>
            </table>
        </div>
        <div class="col-4">
            <?php foreach ($articles as $article) : ?>
                <tr>
                    <td>
                        <h6>Catégorie :<?= $article['categorie_id'] ?></h6>
                    </td>
                </tr>
            <?php endforeach ?>
        </div>
  </div>
</div>

