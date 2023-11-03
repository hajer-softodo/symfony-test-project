<?php 
 namespace App\Controller;

 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;

 class HelloController {
    /**
     * @Route("/hello/{text}", name="hello")
     */
    public function hello(Request $request, $text) {
        return new Response($text);
   
    }
 }