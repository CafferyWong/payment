<?php
use Phalcon\Config;

return new Config(array(
    'database' => array(
        'adapter' => 'Mysql',
        'host'    => 'localhost',
        'port'    => '3306',
        'username'=> 'root',
        'password'=> '',
        'dbname'  => 'paydb'
    ),

    'application' => array(
        'controllersDir' => '../app/controller',
        'modelsDir'      => '../app/model',
        'viewsDir'       => '../app/view',
    )
));
?>