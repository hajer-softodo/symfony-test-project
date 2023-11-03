<?php 
 namespace App\Controller;

 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;
 use Psr\Log\LoggerInterface;

 class HelloController {

    protected $logger;
    protected $calculator;

    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }
    public function __construct(calculator){
        $this->logger = $logger;
    }

    /**
     * @Route("/hello/{text?world}", name="hello")
     */
    public function hello(Request $request, $text) {
    $this->logger->info("logger here :)");
        return new Response("hello $text");
   
    }
 }