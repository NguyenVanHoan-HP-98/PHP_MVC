<?php
    class controller{
        public function model($model)
        {
            require_once "./MVC/models/".$model.".php";
            return new $model;
        }
        public function view($view)
        {

        }
    }

?>