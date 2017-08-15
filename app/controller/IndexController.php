<?php
use Phalcon\Mvc\Controller;

class IndexController extends Controller {

    //默认Action
    public function indexAction() {
        echo "Hello world!";
    }

    public function otherAction() {
        echo "Hello Caffery";
    }
}
?>