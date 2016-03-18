<?php
//new blog entry gets writen here
$view->extend('layout.html.php') ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Ein wildes Pokémon erscheint!</h3>
                </div>
                <div class="panel-body">
                    <div>
                        <?php if (isset($allCorrect) && $allCorrect == false) : ?>
                            <div class="alert alert-danger" role="alert">
                                Pokémon Name <strong>und</strong> Beschreibung bitte eingeben.
                            </div>
                        <?php endif; ?>
                    </div>

                    <form action="/newblog" method="post">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Pokémon Name">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="comment"
                                      placeholder="Pokémon Beschreibung"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Catch 'Em</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
