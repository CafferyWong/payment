<?php
use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\DI\FactoryDefault;

define('APP_PATH', realpath('..'));

try {

    //加载配置文件
    $config = include APP_PATH . '/config/config.php';

    //创建自动加载(AutoLoaders)实例
    $loader = new Loader();

    //通过自动加载加载控制器(Controllers)
    $loader->registerDirs(array(
        $config->application->controllersDir,
        $config->application->modelsDir,
    ))->register();

    //创建一个di实例
    $di = new FactoryDefault();

    //实例化view 赋值给DI的view
    $di->set('view', function () {
        $view = new View();
        $view->setViewsDir(APP_PATH . '/app/view');
        return $view;
    });

    //处理请求
    $application = new Application($di);

    //输出请求类容
    echo $application->handle()->getContent();

} catch (\Exception $e) {

    //异常处理
    echo 'PhalconException: ', $e->getMessage();
}
?>