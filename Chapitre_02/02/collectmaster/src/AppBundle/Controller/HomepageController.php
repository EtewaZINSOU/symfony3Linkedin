<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $item = new Item();
        $item->setTitle('test');
        $item->setDescription('Juste un test');
        $item->setCode('1234567890');
        $item->setCollection('test');

        $em = $this->getDoctrine()->getManager();
        $em->persist($item);
        $em->flush();

        // replace this example code with whatever you need
        return $this->render('homepage/index.html.twig', []);
    }
}
