<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LuckyController extends Controller
{
    
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }
        /**
     * @Route("/lucky/contact")
     */
    public function contactAction()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/contact.html.twig', array(
     
        ));
    }
     /**
     * @Route("/lucky/thankyou")
     */
    public function thankyouAction()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/thankyou.html.twig', array(
            
        ));
    }
}