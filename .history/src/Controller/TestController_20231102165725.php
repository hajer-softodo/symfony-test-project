<?php 
 namespace App\Controller;

 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;

 class TestController {
    
    protected $calculator;

    /**
     * @Route("/{age<\d+>?0}", name="index", methods={"GET", "POST"}, host="127.0.0.1")
     */
    public function index(Request $request, $age) {

        // $request = Request::createFromGlobals();
        // $age = $request->attributes->get('age');
        // dump($request->attributes->get('age'));
        // $age = $request->query->get('age',0);
        // $age = $_GET['age'];
        // dd("vous avez $age ans");
        return new Response("vous avez $age ans!");
       
    }


    public function __construct(Calculator $calculator){
        $this->calculator = $calculator;
    } 

    /**
     * @Route("/test", name="test")
     */
    public function test() {
        dd("page test ici ");
         // inject our 
    }


 }