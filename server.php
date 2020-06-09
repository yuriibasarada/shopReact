<?php
use components\brand\Storage as Brand;
use components\brand\GetAllBrands;

use components\material\Storage as Material;
use components\material\GetAllMaterials;

use components\category\Storage as Category;
use components\category\GetAllCategories;

use components\product\Storage as Product;
use components\product\GetAllProducts;

use components\sort\Storage as Sort;
use components\sort\GetAllSort;


use components\login\Authentication;
use components\login\Guard;
use core\ErrorHandler;
use core\JsonRequestDecoder;
use core\Router;
use Dotenv\Dotenv;
use FastRoute\DataGenerator\GroupCountBased;
use FastRoute\RouteCollector;
use FastRoute\RouteParser\Std;
use React\EventLoop\Factory;
use React\Http\Server;
use React\MySQL\Factory as FactorySQL;
use Sikei\React\Http\Middleware\CorsMiddleware;
use components\login\Storage as User;

use components\login\Login;
use components\login\Logout;


require_once 'vendor/autoload.php';

$env = Dotenv::create(__DIR__);
$env->load();

$loop = Factory::create();

$mysql = new FactorySQL($loop);
$uri = getenv('DB_LOGIN') . ':' . getenv('DB_PASS') . '@' . getenv('DB_HOST') . '/' . getenv('DB_NAME');
$connection = $mysql->createLazyConnection($uri);

$guard = new Guard(getenv('JWT_KEY'));

$user = new User($connection);

$brand = new Brand($connection);
$material = new Material($connection);
$category = new Category($connection);
$product = new Product($connection);
$sort = new Sort($connection);

$authenticator = new Authentication($user, getenv('JWT_KEY'));


$routes = new RouteCollector(new Std(), new GroupCountBased());
$routes->post('/login', new Login($authenticator));
$routes->post('/logout', $guard->protect(new Logout()));

$routes->get('/brand',new GetAllBrands($brand));
$routes->get('/material',new GetAllMaterials($material));
$routes->get('/category',new GetAllCategories($category));

$routes->get('/product',new GetAllProducts($product));
$routes->get('/product/category',new GetAllProducts($product));

$routes->get('/sort', new GetAllSort($sort));

$settings = [
    'allow_origin'      => ['*'],
    'allow_headers'     => ['DNT','X-Custom-Header','Keep-Alive','User-Agent','X-Requested-With','If-Modified-Since','Cache-Control','Content-Type','Content-Range','Range'],
    'allow_methods'     => ['GET', 'POST', 'PUT', 'DELETE', 'HEAD', 'OPTIONS'],
];
$middleware = [new CorsMiddleware($settings), new ErrorHandler(), new JsonRequestDecoder(), new Router($routes)];
$server = new Server($middleware);
$socket = new \React\Socket\Server('127.0.0.1:8000', $loop);

$server->listen($socket);

$server->on('error', function (Throwable $error) {
    echo 'Error: ' . $error->getMessage() . PHP_EOL;
});

echo 'Listening on ' . str_replace('tcp', 'http', $socket->getAddress()) . PHP_EOL;

$loop->run();