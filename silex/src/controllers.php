<?php
use Symfony\Component\HttpFoundation\Request;

/**
 * @var $app Silex\Application
 * @var $dbConnection Doctrine\DBAL\Connection
 * @var $template Symfony\Component\Templating\DelegatingEngine
 */

//Global variable
$dbConnection = $app['db'];
$template = $app['templating'];

//not relevant
$app->get('/welcome/{name}', function ($name) use ($template) {
    return $template->render(
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

//Startpage
$app->get('/home', function () use ($template) {
    return $template->render(
        'home.html.php',
        array('active' => 'home', 'title' => 'Training')
    );
});

//Show all entries
$app->get('/blog', function () use ($template, $dbConnection) {
    $posts = $dbConnection->fetchAll(
        'SELECT * FROM blog_post'
    );
    return $template->render(
        'blog.html.php',
        array('active' => 'blog', 'title' => 'Pokédex', 'posts' => $posts)
    );
});

//add a new blog entry
$app->get('/newblog', function () use ($template) {
    return $template->render(
        'newblog.html.php',
        array('active' => 'newblog', 'title' => 'Catch em')
    );
});

//detecting error at newblog
$app->match('/newblog', function (Request $request) use ($template, $dbConnection, $app) {
    $allCorrect = true;

    //if the method isn´t post or get it will be return the errorcode 405
    if (!$request->isMethod('POST') && !$request->isMethod('GET')) {
        $app->abort(405);
    }

    //entry is false
    if ($request->isMethod('POST')) {
        if ($request->get('title') == Null || $request->get('comment') == Null) {
            $allCorrect = false;
        }
    }
    $return_site = 'newblog.html.php';

    //entry is correct
    if ($allCorrect == true && $request->isMethod('POST')) {

        $dbConnection->insert(
          'blog_post',
            array(
                'title' => $request->get('title'),
                'text' => $request->get('comment'),
                'created_at' => date('c')
            )
        );
        $return_site = 'blog.successful.html.php';
    }

    return $template->render(
        $return_site,
        array(
            'active' => 'newblog',
            'allCorrect' => $allCorrect,
            'title' => $request->get('title'),
            'comment' => $request->get('comment')
        )
    );
});

//show one blog entry
$app->get('/blog/{id}', function ($id) use ($app, $template, $dbConnection) {
    $post = $dbConnection->fetchAssoc("SELECT * FROM blog_post WHERE id=?", array($id));

    return $template->render(
        'entry.html.php',
        array(
            'active' => 'blog',
            'title' => 'Got em',
            'post' => $post)
    );
});
/*
$app->get('/login', function () use ($app) {
    $username = $app['request']->server->get('PHP_AUTH_USER', false);

    if ('igor' === $username) {
        $app['session']->set('user', array('username' => $username));
        return $app->redirect('/account');
    }

    $response = new Response();
    $response->headers->set('WWW-Authenticate', sprintf('Basic realm="%s"', 'site_login'));
    $response->setStatusCode(401, 'Please sign in.');
    return $response;
});

$app->get('/account', function () use ($app) {
    if (null === $user = $app['session']->get('user')) {
        return $app->redirect('/login');
    }

    return "Welcome {$user['username']}!";
});*/