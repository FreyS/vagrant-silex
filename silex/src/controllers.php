<?php
use Symfony\Component\HttpFoundation\Request;

/**
 * @var $app Silex\Application
 */

$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});

$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});

$app->get('/home', function() use ($app) {
    return $app['templating']->render(
        'home.html.php',
        array('active' => 'home', 'title' => 'Home')
    );
});

$app->get('/blog', function() use ($app) {
    return $app['templating']->render(
        'blog.html.php',
        array('active' => 'blog', 'title' => 'Blog')
    );
});

$app->get('/newblog', function() use ($app) {
    return $app['templating']->render(
        'newblog.html.php',
        array('active' => 'newblog', 'title' => 'New Blog Post')
    );
});

$app->match(
    '/newblog',
    function (Request $request) use ($app) {
        $allCorrect = true;
        if ($request->isMethod('POST') ) {
            if ($request->get('title') == Null || $request->get('comment') == Null){
                $allCorrect = false;
            }
        }
        $return_site = 'newblog.html.php';

        if ($allCorrect == true && $request->isMethod('POST')) {
            $return_site = 'blog.successful.html.php';
        }

        return $app['templating']->render (
          $return_site,
            array(
                'active' => 'newblog',
                'allCorrect' => $allCorrect,
                'title' => $request->get('title'),
                'comment' => $request->get('comment')
            )
        );
    });