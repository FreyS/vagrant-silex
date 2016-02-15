<?php $view->extend('layout.html.php') ?>


<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Blog</h3>
                </div>
                <lu class="list-group">
                    <?php foreach ($posts as $entry) { ?>
                        <li class="list-group-item">

                            <strong><?= $entry["title"];?></strong>
                            am <?= $entry["created_at"] ?>
                            von
                            <br><?= $entry["text"];?>
                        </li>
                    <?php } ?>
                </lu>
            </div>
        </div>
    </div>
</div>

