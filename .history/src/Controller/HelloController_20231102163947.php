<?php 
 namespace App\Controller;

 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;

 class HelloController {

    protected $logger;

    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }
    /**
     * @Route("/hello/{text?world}", name="hello")
     */
    public function hello(Request $request, $text) {
        return new Response("hello $text");
   
    }
 }