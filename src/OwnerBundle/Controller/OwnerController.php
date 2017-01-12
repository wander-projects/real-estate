<?php

namespace OwnerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * owner controller.
 *
 * @Route("/owner")
 */
class OwnerController extends Controller
{
    /**
     * Lists all owner entities.
     *
     * @Route("/", name="owner")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
//        $em = $this->getDoctrine()->getManager();
//        $entities = $em->getRepository('OwnerBundle:Owner')->findAll();
//        
//        return $this->render('Owner/index.html.twig', array('entities' => $entities));
        
        return $this->render('Owner/index.html.twig');
    }
}
