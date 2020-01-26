<h1>Article list</h1>

<table>
<?php foreach ($articles as $article) : ?>
        <tr>
            <td>
                <h2><a href="article/<?= $article['url'] ?>"><?= $article['title'] ?></a></h2>
                <p><?= $article['text'] . $article['date'] ?></p>
                <h6>Catégorie :<?= $article['categorie_id'] ?></h6>
            </td>
        </tr>
<?php endforeach ?>
</table>
