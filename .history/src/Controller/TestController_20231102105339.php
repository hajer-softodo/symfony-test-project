<?php 
 namespace App\Controller;

 class TestController {
    public function index() {

        $request = Request
        $age = $_GET['age'];
        dd("vous avez $age ans");
       
    }

    public function test() {
        dd("page test ici ");
   
    }


 }