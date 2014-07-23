<?php

namespace douane\intraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use douane\intraBundle\Entity\Document;
use douane\intraBundle\Entity\Formation;
use douane\intraBundle\Entity\Theme;
use CCDNForum\ForumBundle\Entity\Board;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Doctrine\Form\ChoiceList\EntityChoiceList;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('douaneintraBundle:Default:index.html.twig');
    }

    

    public function uploadAction(Request $request)
    {
    $document = new Document();
    $em = $this->getDoctrine()->getEntityManager();
        $manyEntity = 'douane\intraBundle\Entity\Formation';
        $manyList = new EntityChoiceList($em, $manyEntity);
    
    $form = $this->createFormBuilder($document)
        ->add('nom_document', 'text', array('attr' => array('style' => 'margin-left: 50px; width: 310px')))
        ->add('file')
        ->add('formation', 'entity', array('class'=>'douaneintraBundle:Formation', 'property'=>'nom_formation'))
        ->add('saveAndAdd', 'submit', array('attr' => array('class' => 'btn btn-info')))
        ->getForm();

    $form->handleRequest($request);

    if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();

        $em->persist($document);
        $em->flush();

        return $this->redirect($this->generateUrl('show'));
    }

    return $this->render('douaneintraBundle:Default:docUpload.html.twig', array('form' => $form->createView()));

    }

    

    public function showAction()
    {

    $repository = $this->getDoctrine()->getRepository('douaneintraBundle:Document');

    // find *all* products
    $docs = $repository->findAll();
    return $this->render('douaneintraBundle:Default:docShow.html.twig', array('result' => $docs));

}

public function downloadAction($id)
{
    $request = $this->get('request');
    $repository = $this->getDoctrine()->getRepository('douaneintraBundle:Document');
    $doc = $repository->find($id);
    $filename = $doc->getPath();
    $content = file_get_contents($filename);

    $response = new Response();

    //set headers
    $response->headers->set('Content-Type', 'mime/type');
    $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);

    $response->setContent($content);
    return $response;
}

public function displayAction(Request $request)
{
    $formation = new Formation();
    $form = $this->createFormBuilder($formation)
        
        ->add('theme', 'entity', array('class'=>'CCDNForumForumBundle:Board', 'property'=>'name'))
        ->add('submit', 'submit', array('attr' => array('class' => 'btn btn-info')))
        ->getForm();

    $form->handleRequest($request);
    
    $repository = $this->getDoctrine()->getRepository('douaneintraBundle:Formation'); 
    $em = $this->getDoctrine()->getManager();
    $query = $em->createQuery(
        'SELECT p.id_formation
        FROM douaneintraBundle:Formation p
        WHERE p.theme = :theme'
        //ORDER BY p.price ASC'
    )->setParameter('theme', $formation->getTheme());

    $forma = $query->getResult();
        
    $repository = $this->getDoctrine()->getRepository('douaneintraBundle:Document'); 
    $em = $this->getDoctrine()->getManager();
    $query = $em->createQuery(
        'SELECT p
        FROM douaneintraBundle:Document p
        WHERE p.formation = :forma'
        //ORDER BY p.price ASC'
    )->setParameter('forma', $forma);

    $doc = $query->getResult();


    return $this->render('douaneintraBundle:Default:display.html.twig', array('form' => $form->createView(), 'result' => $doc));

}

public function addFormationAction(Request $request)
    {
    $formation = new Formation();
    $em = $this->getDoctrine()->getEntityManager();
        $manyEntity = 'douane\intraBundle\Entity\Formation';
        $manyList = new EntityChoiceList($em, $manyEntity);
    
    $form = $this->createFormBuilder($formation)
        ->add('nom_formation', 'text', array('attr' => array('style' => 'margin-left: 70px; width: 310px')))
        ->add('lieu_formation', 'text', array('attr' => array('style' => 'margin-left: 73px; width: 310px')))
        ->add('action_formation', 'text', array('attr' => array('style' => 'margin-left: 52px; width: 310px')))
        ->add('animateur_formation', 'text', array('attr' => array('style' => 'margin-left: 15px; width: 310px')))
        ->add('theme', 'entity', array('class'=>'CCDNForumForumBundle:Board', 'property'=>'name'))
        ->add('saveAndAdd', 'submit', array('attr' => array('class' => 'btn btn-info')))
        ->getForm();

    $form->handleRequest($request);

    if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();

        $em->persist($formation);
        $em->flush();

        return $this->redirect($this->generateUrl('show'));
    }

    return $this->render('douaneintraBundle:Default:docUpload.html.twig', array('form' => $form->createView()));

    }

}