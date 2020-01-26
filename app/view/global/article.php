<header>
        <h1><?= $title ?></h1>
</header>
<section>
    <h2><?= $article['title'] ?></h2>
    <p><?= $article['text'] . $article['date'] ?></p>
    <h6>Catégorie :<?= $article['categorie_id'] ?></h6>
</section>
