<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\Article;
use App\Blog;

$blog = new Blog('The Mandalorian');

$blog->addArticle(new Article('Mandos Tips for Traveling the Galaxy', "With all the stress that goes into booking flights and lodging, packing (and not forgetting) everything you'll need, finding pet sitters, and everything else that goes with a trip overseas, there's the added stress of staying connected while abroad."));
$blog->addArticle(new Article('A Galaxy Extremely Far Far Away', "A long time ago, a galaxy far, far away sprang into existence. Billions of years later, light from that galaxy hit a mirror in a solar-powered satellite orbiting the third planet of a medium-sized star, and the scientific community of the ruling species of that planet got really excited. And they all lived happily ever after."));

?>
<h1><?= $blog->name ?></h1>
<main>
    <?php foreach ($blog->articles as $article) : ?>
        <article>
            <h2><?= $article->title ?></h2>
            <p><?= $article->content ?></p>
        </article>
    <?php endforeach; ?>
</main>