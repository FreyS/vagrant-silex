<?php $view->extend('layout.html.php') ?>


<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Blog</h3>
                </div>
                <lu class="list-group">
                    <?php foreach ($posts as $entry) : ?>
                        <li class="list-group-item">
                            <a href="blog/<?= $entry['id']; ?>" class="linkBlogEntry">
                                <?= $entry["title"]; ?>
                            </a>
                            am <?= $entry["created_at"] ?>
                            von
                            <br><?= $entry["text"]; ?>
                        </li>
                    <?php endforeach; ?>
                </lu>
            </div>
        </div>
    </div>
</div>

