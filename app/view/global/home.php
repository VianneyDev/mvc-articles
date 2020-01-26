<h1>Article list</h1>

<table>
<?php foreach ($articles as $article) : ?>
        <tr>
            <td>
                <h2><a href="article/<?= $article['url'] ?>"><?= $article['title'] ?></a></h2>
                <button type="button" class="btn btn-success">Créer</button>
                <button type="button" class="btn btn-primary">Modifier</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
                <p><?= $article['text'] . $article['date'] ?></p>
                <h6>Catégorie :<?= $article['categorie_id'] ?></h6>
            </td>
        </tr>
<?php endforeach ?>
</table>
