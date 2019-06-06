<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MattiaController extends AbstractController{

     public function ciao() 
    {
        # code...


        $number = random_int(5,10);

            return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

//rendering pagina con
    public function demoTemplating()  
    {

        $number = random_int(1,10);

        return $this->render('prova/prova.html.twig', [
            'number' => $number,
        ]); 

    }

}
