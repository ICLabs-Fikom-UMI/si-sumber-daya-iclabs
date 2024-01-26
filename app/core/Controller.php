<<<<<<< HEAD
<?php

class Controller {
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }


    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
=======
<?php

class Controller {
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
>>>>>>> c95246166e96f463a7b4b95b6190081f1b993c7b
}