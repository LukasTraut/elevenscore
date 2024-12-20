<?php
require "views/templates/header.php";
require 'models/news_modle.php';

?>

<h1>News</h1>

<?php foreach ($newss as $news) : ?>

    <div>
        <h2 id="news-title"><?= htmlspecialchars($news[2]) ?>
        </h2>
        <p id="news-content"><?= htmlspecialchars($news[3]) ?>
        </p>
        <?php if ($news[5] !== '') : ?>
        <img src="<?= ($news[5]) ?>">
        <?php endif; ?>
        <p  id="news-content">Geschrieben von: <?= htmlspecialchars($news[1]) ?> am <?= htmlspecialchars($news[4]) ?>
        </p>
        <hr>
    </div>
<?php endforeach; ?>