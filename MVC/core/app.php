<?php
 class App{
     // localhost/duancanhan/PHP_MVC_KHOAPHAM/Home/funtion/thamso1/thamso2
     // khách hàng sẽ chạy link kia
     // $controller sẽ địa diện cho Home
     // $action đại diện cho funtion
     // $params đại diện cho thamso1, thamso2

     protected $controller = "Home" ;
     protected $action = "SayHi";
     protected $params = [];
     function __construct()
     {  //Array ( [0] => Home [1] => SayHi [2] => 1 [3] => 2 [4] => 3 ) 
        $arr = $this -> UrlProcess();

        // Xử lý controller
        if(file_exists("./MVC/controllers/".$arr[0].".php"))
        {
            $this->controller = $arr[0];
            unset($arr[0]);
        } 
        require_once "./MVC/controllers/".$this->controller.".php";   
        $this->controller = new $this->controller;
        // Xử lý phần Function
        if(isset($arr[1]))
        {
            if(method_exists($this->controller,"$arr[1]")) // Kiểm tra 1 tên hàm có trong 1 cái lớp class nào không
            {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        // Xử lý params
        $this->params = isset($arr)? array_values($arr):[];

        // Cách gọi hàm SayHi, Show trong lớp Home
        // chạy hàm trong lớp và truyền biến vào 
        call_user_func_array([$this->controller, $this->action],$this->params);
     }

     // Xử lý url
     function UrlProcess()
     {
        if(isset($_GET["url"]))
        {
            //Home/SayHi/1/2/3
           return explode("/",filter_var(trim($_GET["url"], "/")));
        }
     }
 }
    
?>