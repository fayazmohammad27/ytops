<?php

require './app/controller.php';
include './vendor/user.php';

class HomeController extends Controller {

    public $view;

    public function __construct() {

        parent::__construct();
        /* START OF PROJECT TASKS */
        $this->app->get('/project', function() {
            $this->get("CPF");
        });
        $this->app->post('/project', function() {
            $this->create("INP");
        });

        $this->app->get('/project/:id', function($id) {
            $this->get("GPD", $id);
        });
        /* END OF PROJECT TASKS */
        
        /* START OF USER TASKS */
        
         $this->app->get('/user', function() {
            $this->get("CUF");
        });
        
        /* END OF USER TASKS */

        $this->app->run();
    }

    public function get($task, $id = null) {
        if ($this->app->request->isGet() && $task == "CPF" && $id == null) {
            $this->view = $this->app->view();
            $this->view->setTemplatesDirectory('./templates/projects');
            $this->app->render('createProjectForm.php');
        } elseif ($this->app->request->isGet() && $task == "GPD" && $id != null) {
            echo "get one project details";
        }
    }

    public function create($task) {
        if ($this->app->request->isPost() && $task == "INP") {
            echo $task;
            print_r($_POST);
            $user = new Users();
            $user->insert();
        }
    }

}

$obj = new HomeController();
