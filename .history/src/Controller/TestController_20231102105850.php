<?php 
 namespace App\Controller;

 use Sy
 class TestController {
    public function index() {

        $request = Request::createFromGlobals();
        $age = $_GET['age'];
        dd("vous avez $age ans");
       
    }

    public function test() {
        dd("page test ici ");
   
    }


 }