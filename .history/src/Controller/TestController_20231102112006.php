<?php 
 namespace App\Controller;

 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;

 class TestController {
    public function index(Request $request) {

        // $request = Request::createFromGlobals();
        dump($request->attr);
        $age = $request->query->get('age',0);
        // $age = $_GET['age'];
        // dd("vous avez $age ans");
        return new Response("vous avez $age ans!");
       
    }

    public function test() {
        dd("page test ici ");
   
    }


 }