<?php $view->extend('layout.html.php') ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Neuer Beitrag</h3>
                </div>
                <div class="panel-body">
                        <div>
                            <?php
                                if (isset($allCorrect)&&$allCorrect == false) {
                                    echo '<div class="alert alert-danger" role="alert">Alles ausfüllen!</div>';
                                }
                            ?>
                        </div>
                    <form action="/newblog" method="post">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Gib einen Titel an">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="comment" placeholder="Gib einen Text an"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Absenden</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>