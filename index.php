<!DOCTYPE html>
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

    </div>

    <?php
    require_once('vendor/autoload.php');

    use App\Core\DatabaseConfig;
    use App\Core\DatabaseConnection;
    use App\Models\SlatkisModel;

    $databaseConfig = new DatabaseConfig('localhost', 'root', '', 'prodavnica_slatkisa');
    $databaseConnection = new DatabaseConnection($databaseConfig);

    $slatkisModel = new SlatkisModel($databaseConnection);

    $slatkisi = $slatkisModel->getAll();

    if ($slatkisi){
        print_r($slatkisi);
    }
    ?>

    <footer>

    </footer>
</body>

</html>