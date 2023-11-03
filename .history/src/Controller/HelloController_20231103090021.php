<?php 
 namespace App\Controller;

 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;
//  use Psr\Log\LoggerInterface;
 use App\Taxes\Calculator;

 class HelloController {

    // protected $logger;
    // public function __construct(LoggerInterface $logger){
    //     $this->logger = $logger;
    // }
    protected $calculator;
    public function __construct(Calculator $calculator){
        $this->calculator = $calculator;
    } 

    /**
     * @Route("/hello/{text?world}", name="hello")
     */
    public function hello(Request $request, $text) {
    // $this->logger->info("logger here :)");
        $tva = $this->calculator->calcul(30);
        return new Response("le tva est $tva");
        $contents = $this->renderView('base.html.twig', [
            'category' => '...',
            'promotions' => ['...', '...'],
        ]);

        return new Response($contents);
    }
 }