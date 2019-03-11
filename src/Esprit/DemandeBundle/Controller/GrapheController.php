<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GrapheController
 *
 * @author majd ben khalifa
 */
namespace Esprit\DemandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\DemandeBundle\Entity\DemandeService;




use Ob\HighchartsBundle\Highcharts\Highchart;
class GrapheController extends Controller {
   public function chartPieAction(){

       $em = $this->getDoctrine()->getManager();
        $Transport = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeesType("Transport");
         $Education = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeesType("education");
         $photographie = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeesType("photographie");
         $jardinage = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeesType("jardinage");
         $maintenance = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeesType("maintenance");
         $divers = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeesType("divers");
       
$ob = new Highchart();

$ob->chart->renderTo('piechart');

$ob->title->text('Statistique des categories des demandes services');

$ob->plotOptions->pie(array(

 'allowPointSelect' => true,

 'cursor' => 'pointer',

 'dataLabels' => array('enabled' => false),

 'showInLegend' => true

));

$data = array(
 array('Transport', intval($Transport)),

 array('Education', intval($Education)),

 array('photographie', intval($photographie)),

 array('jardinage', intval($jardinage)),

 array('maintenance', intval($maintenance)),

 array('divers', intval($divers)),

);

$ob->series(array(array('type' => 'pie','name' => 'Nombre', 'data' => $data)));

return $this->render('EspritDemandeBundle:Graphe:pie.html.twig', array(

 'chart' => $ob

 ));

}

 public function chartPie2Action(){

       $em = $this->getDoctrine()->getManager();
        $tunis = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeeslieu("tunis");
         $ariana = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeeslieu("ariana");
         $bizerte = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeeslieu("bizerte");
         $sousse = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeeslieu("sousse");
         $benarous = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeeslieu("benarous");
         
       
$ob = new Highchart();

$ob->chart->renderTo('piechart');

$ob->title->text('Statistique des lieu des demandes services');

$ob->plotOptions->pie(array(

 'allowPointSelect' => true,

 'cursor' => 'pointer',

 'dataLabels' => array('enabled' => false),

 'showInLegend' => true

));

$data = array(
 array('tunis', intval($tunis)),

 array('sousse', intval($sousse)),

 array('ariana', intval($ariana)),

 array('bizerte', intval($bizerte)),

 array('benarous', intval($benarous)),

 

);

$ob->series(array(array('type' => 'pie','name' => 'Nombre', 'data' => $data)));

return $this->render('EspritDemandeBundle:Graphe:pie.html.twig', array(

 'chart' => $ob

 ));

}

public function chartPie3Action(){

       $em = $this->getDoctrine()->getManager();
        $Contenu = $em->getRepository('EspritDemandeBundle:ReclamationForum')->NbIdeesCat("Contenu indiserable");
         $harcelement = $em->getRepository('EspritDemandeBundle:ReclamationForum')->NbIdeesCat("harcelement");
         $spam = $em->getRepository('EspritDemandeBundle:ReclamationForum')->NbIdeesCat("spam");
         $autre = $em->getRepository('EspritDemandeBundle:ReclamationForum')->NbIdeesCat("autre");
        
         
       
$ob = new Highchart();

$ob->chart->renderTo('piechart');

$ob->title->text('Statistique des Categorie des Reclamation Forum');

$ob->plotOptions->pie(array(

 'allowPointSelect' => true,

 'cursor' => 'pointer',

 'dataLabels' => array('enabled' => false),

 'showInLegend' => true

));

$data = array(
 array('Contenu indiserable', intval($Contenu)),

 array('harcelement', intval($harcelement)),

 array('spam', intval($spam)),

 array('autre', intval($autre)),

 

 

);

$ob->series(array(array('type' => 'pie','name' => 'Nombre', 'data' => $data)));

return $this->render('EspritDemandeBundle:Graphe:pie.html.twig', array(

 'chart' => $ob

 ));

}


public function chartPie4Action(){

       $em = $this->getDoctrine()->getManager();
        $OffrePrd = $em->getRepository('EspritDemandeBundle:Forum')->NbIdeesForum("Offre Produit");
         $OffreSrv = $em->getRepository('EspritDemandeBundle:Forum')->NbIdeesForum("Offre Service");
         $DemandeSrv = $em->getRepository('EspritDemandeBundle:Forum')->NbIdeesForum("Demande Service");
         $autre = $em->getRepository('EspritDemandeBundle:Forum')->NbIdeesForum("Autre");
        
         
       
$ob = new Highchart();

$ob->chart->renderTo('piechart');

$ob->title->text('Statistique des Categorie des Sujets Forum');

$ob->plotOptions->pie(array(

 'allowPointSelect' => true,

 'cursor' => 'pointer',

 'dataLabels' => array('enabled' => false),

 'showInLegend' => true

));

$data = array(
 array('Offre produit', intval($OffrePrd)),

 array('Offre Servicet', intval($OffreSrv)),

 array('Demande Service', intval($DemandeSrv)),

 array('Autre', intval($autre)),

 

 

);

$ob->series(array(array('type' => 'pie','name' => 'Nombre', 'data' => $data)));

return $this->render('EspritDemandeBundle:Graphe:pie.html.twig', array(

 'chart' => $ob

 ));

}
public function chartPie5Action(){

       $em = $this->getDoctrine()->getManager();
        $valide = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeesVal("valide");
         $cours = $em->getRepository('EspritDemandeBundle:DemandeService')->NbIdeesVal("en cours");
         
   
         
       
$ob = new Highchart();

$ob->chart->renderTo('piechart');

$ob->title->text('Statistique des Categorie des Sujets Forum');

$ob->plotOptions->pie(array(

 'allowPointSelect' => true,

 'cursor' => 'pointer',

 'dataLabels' => array('enabled' => false),

 'showInLegend' => true

));

$data = array(
 array('Valide', intval($valide)),

 array('En cours', intval($cours)),


 

 

);

$ob->series(array(array('type' => 'pie','name' => 'Nombre', 'data' => $data)));

return $this->render('EspritDemandeBundle:Graphe:pie.html.twig', array(

 'chart' => $ob

 ));

}

   }
