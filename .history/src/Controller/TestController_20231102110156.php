<?php 
 namespace App\Controller;

 use Symfony\Component\HttpFoundation\Request;

 class TestController {
    public function index() {

        $request = Request::createFromGlobals();
        $age = $request->query
        // $age = $_GET['age'];
        dd("vous avez $age ans");
       
    }

    public function test() {
        dd("page test ici ");
   
    }


 }