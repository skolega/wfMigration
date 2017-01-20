<?php

namespace AppBundle\Controller;

use WfMagConnectionBundle\Entity\Artykul;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Artykul controller.
 *
 * @Route("artykul")
 */
class ArtykulController extends Controller
{
    /**
     * Lists all artykul entities.
     *
     * @Route("/", name="artykul_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager('wfmag');

        $artykuls = $em->getRepository('WfMagConnectionBundle:Artykul')->findAll();

        return $this->render('wfMag/artykul/index.html.twig', array(
            'artykuls' => $artykuls,
        ));
    }

    /**
     * Creates a new artykul entity.
     *
     * @Route("/new", name="artykul_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $artykul = new Artykul();
        $form = $this->createForm('WfMagConnectionBundle\Form\ArtykulType', $artykul);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($artykul);
            $em->flush($artykul);

            return $this->redirectToRoute('wfMag/artykul_show', array('id' => $artykul->getId()));
        }

        return $this->render('wfMag/artykul/new.html.twig', array(
            'artykul' => $artykul,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a artykul entity.
     *
     * @Route("/{id}", name="artykul_show")
     * @Method("GET")
     */
    public function showAction(Artykul $artykul)
    {
        $deleteForm = $this->createDeleteForm($artykul);

        return $this->render('wfMag/artykul/show.html.twig', array(
            'artykul' => $artykul,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing artykul entity.
     *
     * @Route("/{id}/edit", name="artykul_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Artykul $artykul)
    {
        $deleteForm = $this->createDeleteForm($artykul);
        $editForm = $this->createForm('WfMagConnectionBundle\Form\ArtykulType', $artykul);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('artykul_edit', array('id' => $artykul->getId()));
        }

        return $this->render('wfMag/artykul/edit.html.twig', array(
            'artykul' => $artykul,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a artykul entity.
     *
     * @Route("/{id}", name="artykul_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Artykul $artykul)
    {
        $form = $this->createDeleteForm($artykul);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($artykul);
            $em->flush($artykul);
        }

        return $this->redirectToRoute('artykul_index');
    }

    /**
     * Creates a form to delete a artykul entity.
     *
     * @param Artykul $artykul The artykul entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Artykul $artykul)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('artykul_delete', array('id' => $artykul->getIdArtykulu())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
