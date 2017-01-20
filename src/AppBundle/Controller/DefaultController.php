<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->redirectToRoute('app_gentelella');
    }
    
    /**
     * @Route("/artykuly", name="artykuly_index")
     */
    public function artykulyIndexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $artykuls = $em->getRepository('WfMagConnectionBundle:Artykul')->findAll();

        return $this->render('artykul/index.html.twig', array(
            'artykuls' => $artykuls,
        ));
    }
}
