<?php 
 namespace App\Controller;

 class TestController {
    public function index() {
        $age = $_GET['age'];
        dd("vous avez $age ans");
       
    }

    public function test() {
        dd("page test ici ");
   
    }


 }