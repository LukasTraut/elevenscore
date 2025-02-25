<?php
$page = basename($_SERVER['REQUEST_URI'] ?? '');

if (isset($_GET['team'])) {
    $pos = strpos($page, "?");
    $page = substr($page,0, $pos);
}

$routes = [
    'elevenscore'          => 'views/home_view.php',
    'home'          => 'views/home_view.php',
    'tabelle'          => 'views/tabelle_view.php',
    'spieltag'           => 'views/aktuell_view.php',
    'news'         => 'views/news_view.php',
    'add'       =>'views/add_view.php',
    'login'         => 'views/login_view.php',
    'signup'         => 'views/signup_view.php',
    'verein'           => 'views/verein_view.php',
    'kader'           => 'views/kader_view.php',
    'mannschaft'           => 'views/mannschaft_view.php',
];

if ($page == 'add') {
    if ($_SESSION["liau"] != "") {
        require $routes[$page];
    } else {
        header("location: login");
    }
 } 
 else  { 
    require $routes[$page];
}
