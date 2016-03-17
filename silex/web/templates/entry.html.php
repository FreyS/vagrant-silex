<?php
//one entry will be displayed here
$view->extend('layout.html.php') ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b><?= $post['title']; ?></b> erstellt
                    am: <?= $post['created_at']; ?> von
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <?php echo (nl2br($post['text'])); ?>
                    </li>
                </ul>
            </div>
            <a class="btn btn-info" href="/blog" role="button">Zurück</a>
        </div>
    </div>
</div>