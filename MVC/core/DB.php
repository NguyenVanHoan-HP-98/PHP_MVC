<?php
    class DB{
        public $con;
        protected $severname = "localhost";
        protected $username ="root";
        protected $pasword = "";
        protected $dbname ="MVC";

        function __construct()
        {
            $this->con= mysqli_connect($this->severname,$this->username,$this->pasword);
            mysqli_select_db($this->con,$this->dbname);
            mysqli_query($this->con,"SET NAMES 'utf8'");
        }
    }
?>