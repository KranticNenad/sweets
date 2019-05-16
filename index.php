    <?php
    require_once('vendor/autoload.php');
    require_once('Configuration.php');

    ob_start();

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

    $sessionStorageClassName = Configuration::SESSION_STORAGE;
    $sessionStorageConstructorArguments = Configuration::SESSION_STORAGE_DATA;
    $sessionStorage = new $sessionStorageClassName(...$sessionStorageConstructorArguments);

    $session = new App\Core\Session\Session($sessionStorage, Configuration::SESSION_LIFETIME);
    $controller->setSession($session);
    $controller->getSession()->reload();

    call_user_func_array([$controller, $route->getMethod()],$arguments);
    $controller->getSession()->save();

    $data = $controller->getData();

    if ($controller instanceof \App\Core\ApiController){
        ob_clean();
        header('Content-type: application/json; charset=utf-8');
        header('Access-Control-Allow-Origin: *');
        echo json_encode($data);
        exit;
    }

    $loader = new Twig_Loader_Filesystem("./views");
    $twig = new Twig_Environment($loader, [
        "cache" => "./twig-cache",
        "auto_reload" => true //REMOVE THIS AFTER DEV
    ]);
    echo $twig->render($route->getController() .'/'. $route->getMethod() . '.html',$data);
    
