<?php

namespace Gaatu\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Gaatu\CoreBundle\Entity\Transaction;
use Gaatu\CoreBundle\Entity\Shipment;
use Symfony\Component\HttpFoundation\Response;

class EntityController extends Controller
{
    /**
     * @Route("/insert")
     */
    public function insertAction()
    {
        $em = $this->getDoctrine()->getManager();

        $transaction = new Transaction("hobo 1", 12.32, false);
        $em->persist($transaction);

        $transaction = new Transaction("hobo 2", 12.32, false);
        $em->persist($transaction);

        $em->flush();

        return new Response('OMG i persisted 2 transaction');
    }

    /**
     * @Route("/update")
     */
    public function updateAction()
    {
        $em = $this->getDoctrine()->getManager();
        $shipment = new Shipment('1z390dfs303', 'UPS', 34.92);
        $repo = $em->getRepository('GaatuCoreBundle:Transaction');
        $em->persist($shipment);

        $trans = $repo->findOneById(1);

        $trans->addShipment($shipment);
        $em->persist($trans);

        $em->flush();
        return $this->render('base.html.twig');
    }
    /**
     * @Route("/join")
     */
    public function joinActon()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('GaatuCoreBundle:Transaction');
//        $transaction = $repo->find(1);

        $transaction = $repo->getJoined(1);

        $shipments =  $transaction->getShipments();
        foreach ($shipments as $shipment) {
            echo $shipment->getId() . "\n";
        }
        return $this->render('base.html.twig', []);
    }


}
