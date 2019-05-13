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

    $fullControllerName = '\\App\\Controllers\\'.$route->getController().'Controller';
    $controller = new $fullControllerName($databaseConnection);
    call_user_func_array([$controller, $route->getMethod()],$arguments);

    $data = $controller->getData();

    $loader = new Twig_Loader_Filesystem("./views");
    $twig = new Twig_Environment($loader, [
        "cache" => "./twig-cache",
        "auto_reload" => true //REMOVE THIS AFTER DEV
    ]);
    echo $twig->render($route->getController() .'/'. $route->getMethod() . '.html',$data);
    
