<?php 
 namespace App\Controller;

 use Symfony\Component\HttpFoundation\Request;

 class TestController {
    public function index() {

        $request = Request::createFromGlobals();
        // dump($request);
        $age = $request->query->get('age',0);
        // $age = $_GET['age'];
        // dd("vous avez $age ans");
        return new Response("vous avez ")
       
    }

    public function test() {
        dd("page test ici ");
   
    }


 }