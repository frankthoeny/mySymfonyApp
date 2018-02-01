<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
     public function numberAction()
     {
         $number = mt_rand(0, 100);

         return $this->render('lucky/number.html.twig', array(
             'number' => $number,
         ));
     }

     /**
      * @Route("/lucky/color")
      */
      public function colorAction()
      {
          $colors = array("red","green","blue","yellow","brown");
          $color = $colors[array_rand($colors,1)];

          return $this->render('lucky/color.html.twig', array(
              'color' => $color,
          ));
      }
}
