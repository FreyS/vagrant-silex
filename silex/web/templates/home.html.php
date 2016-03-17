<?php //the startpage with difference design elements of the CSS-Framework
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$view->extend('layout.html.php')
?>

<div class="container">
    <header>
        <div class="jumbotron">
            <h1>Pokémon</h1>
            <p>
                Pokémon sind Taschenmonster die ursprünglich von Satoshi Tajiri und der japanischen
                Spielesoftwarefirma GAME FREAK Inc. entwickelt wurden und stellen eines der wichtigsten Franchises des
                Publishers Nintendo dar.
            </p>
        </div>
    </header>
    <div class="row">
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item">Timeline seit 1996</li>
                <li class="list-group-item list-group-item-success">Blau/ Rot/ Gelb</li>
                <li class="list-group-item list-group-item-info">Silber/ Gold/ Kristall</li>
                <li class="list-group-item list-group-item-warning">Rubin/ Saphir/ Smaragt</li>
                <li class="list-group-item list-group-item-danger">Diamand/ Perl/ Platinum</li>
                <li class="list-group-item list-group-item-success">Schwarz/ Weiß</li>
                <li class="list-group-item list-group-item-info">X/ Y</li>
                <li class="list-group-item list-group-item-warning">Omega Rubin/ Alpha Saphir</li>
            </ul>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>Merchandise</h2>
                    Der durchschlagende Erfolg der Pokémon-Spiele löste einen der größten
                    Merchandising-Booms der Geschichte aus. Von Sammelfiguren über Regenschirme, Plüschpuppen,
                    Radiergummis, Speiseeis, Brettspiele, Trinkflaschen, Aufkleber, Makkaroni, T-Shirts bis hin zu
                    PC-Software wurden nahezu alle erdenklichen Produkte auf den Markt gebracht. In Japan wurden sogar
                    mehrere Pokémon-Stores eröffnet, ganze Kaufhäuser widmete man dem Merchandising, und eine
                    japanische Fluggesellschaft verpasste einem ihrer Flugzeuge ein Pokémon-Outfit und bot im
                    Passagierraum exklusive Pokémon-Souvenirs an.
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>Serie und Kino-Filme</h2>
                    Infolge des Markterfolgs der Videospiele wurde eine gleichnamige Anime-Serie
                    produziert, die seit 1997 von TV Tokyo ausgestrahlt wird (seit 1999 auch von RTL 2). 1998 kam in
                    Japan der erste Pokémon-Film in die Kinos, dem bis 2009 elf weitere folgten (im Vertrieb von
                    Warner Bros.). Die Medienpräsenz wirkte auch wieder zurück auf den eigentlichen Absatz der Spiele.
                    Im Rahmen des Crossmarketing konnten Besucher der Warner Bros. Movie World in Deutschland ab 2000
                    den Helden Pikachu als Charakter „live“ im Park erleben.
                </div>
            </div>
        </div>
    </div>
</div>