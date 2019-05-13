<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Slatkiši - Početna</title>

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

    <script src='main.js'></script>
</head>

<body>
    
    <header>

    </header>

    <div id="main">

        <div id="filter_sidebar">

        </div>

        <div id="articles">

        </div>

    </div> -->

    <?php
    require_once('vendor/autoload.php');
    require_once('Configuration.php');

    use App\Core\DatabaseConfig;
    use App\Core\DatabaseConnection;
    use App\Core\Router;

    $databaseConfig = new DatabaseConfig(
        Configuration::DATABASE_HOST,
        Configuration::DATABASE_USER,
        Configuration::DATABASE_PASSWORD,
        Configuration::DATABASE_NAME
    );
    
    $databaseConnection = new DatabaseConnection($databaseConfig);

    $url = strval(filter_input(INPUT_GET, 'URL'));
    $httpMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
    
    $router = new Router();
    $routes = require_once 'Routes.php';
    foreach($routes as $route){
        $router->add($route);
    }

    $route = $router->find($httpMethod, $url);
    $arguments = $route->extractArguments($url);

/*     print_r($route);
    echo "<br/>";
    print_r($arguments);
    exit; */

    $fullControllerName = '\\App\\Controllers\\'.$route->getController().'Controller';
    $controller = new $fullControllerName($databaseConnection);
    call_user_func_array([$controller, $route->getMethod()],$arguments);

    $data = $controller->getData();

    foreach($data as $name => $value){
        $$name = $value;
    }

    require_once 'views/'. $route->getController() .'/'. $route->getMethod() .'.php';
    ?>
<!-- 
    <footer>

    </footer>
</body>

</html> -->