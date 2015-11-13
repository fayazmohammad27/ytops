<?php

require './vendor/autoload.php';

class Controller {

    public $app;

    public function __construct() {
        $this->app = new \Slim\Slim();
        $this->app->hook('slim.before', function () {
            $this->app->view()->appendData(
                    array(
                        'baseUrl' => 'http://localhost/slimdemo/'
            ));
        });
    }

}
