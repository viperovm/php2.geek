<?phprequire_once '../config/main_config.php';require_once('../models/UserModel.php');spl_autoload_register(function ($class) {    include '../controller/' . $class . '.php';});//site.ru/index.php?act=auth&controller=U-Modelsession_start();$action = 'action_';$action .=(isset($_GET['action'])) ? $_GET['action'] : 'index';if (empty($_GET)){    $controller = new MainPageController();} else {    switch ($_GET['controller'])    {        case 'gallery':            $controller = new GalleryController();            break;        case 'goods':            $controller = new GoodsController();            break;        case 'user':            $controller = new UserController();            break;        default:            $controller = new MainPageController();    }}$controller->Request($action);