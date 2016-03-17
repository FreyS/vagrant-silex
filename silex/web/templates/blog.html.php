<?php
//all entries will be post here
$view->extend('layout.html.php') ?>


<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Pokédex</h3>
                </div>
                <ul class="list-group">
                    <?php foreach ($posts as $entry) : ?>
                        <li class="list-group-item">
                            <a href="/blog/<?= $entry['id']; ?>" class="linkBlogEntry">
                                <?= $entry['title']; ?>
                            </a>
                            am <?= $entry['created_at'] ?>
                            von
                            <br><?= (substr($entry['text'], 0, 10)); ?>...
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

