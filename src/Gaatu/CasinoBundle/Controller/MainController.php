<?php
namespace Gaatu\CasinoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function home(Request $request)
    {
        $bet = $won = null;
        if ($request->isMethod('POST')) {
            $bet = $request->get('bet');

            $won = rand(0,1);
        }

        return $this->render('home.html.twig', [
            'bet'    =>  $bet,
            'won'    =>  $won,
        ]);
    }
}
