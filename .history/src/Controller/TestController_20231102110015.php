<?php 
 namespace App\Controller;

 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Request;
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