<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DemandeController
 *
 * @author majd ben khalifa
 */
namespace Esprit\DemandeBundle\Controller;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 use Esprit\DemandeBundle\Entity\DemandeService;
  use Esprit\DemandeBundle\Entity\CommentaireForum;
  use Esprit\DemandeBundle\Entity\ReclamationForum;
 use Esprit\DemandeBundle\Entity\Forum;
use Esprit\DemandeBundle\Entity\Utilisateur;
use Esprit\DemandeBundle\Form\DemandeForm;
use Esprit\DemandeBundle\Form\ReclamationForumForm;
use Esprit\DemandeBundle\Form\ForumForm;
use Esprit\DemandeBundle\Form\CommentaireForm;
use Esprit\DemandeBundle\Form\DemandeForm2;
use Symfony\Component\Form\Button;
use Symfony\Component\Form\ButtonBuilder;
use Symfony\Component\Form\ButtonTypeInterface;

class DemandeController extends Controller {
    
    public function listAction(){
        
         $em=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:DemandeService");
         $demande=$em->findByvalidServDem("valide");
         
         
//         $request=$this->get('request_stack')->getCurrentRequest();       
//        if($request->getMethod()=='POST')
//        {
//            $categorie=$request->get('categorie');
//            
//            
//            $em=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:DemandeService");
//            
//            $demande=$em->majd($categorie);
//            //$demande=$em->getRepository('EspritDemandeBundle:DemandeService')->findBy(array('cathegorie'=>$categorie));
//           return $this->render('EspritDemandeBundle:Demande:resultat.html.twig',array('demandes'=>$demande)); 
//        }
        
         
         return ($this->render("EspritDemandeBundle:Demande:essai.html.twig",array("demandes"=>$demande)));
    
}
    public function list2Action(){
        
         $em=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:DemandeService");
         //$demande=$em->findByidUserDemande("1");
         $demande=$em->MesDemandes();
         
        
         
         return ($this->render("EspritDemandeBundle:Demande:list2.html.twig",array("demandes"=>$demande)));
         
         
    
}


  public function traiterAction(){
         $em=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:DemandeService");
         $demande=$em->findByvalidServDem("0");
         return ($this->render("EspritDemandeBundle:Demande:traitement.html.twig",array("demandes"=>$demande)));
    }  
    
    public function traiterForumAction(){
         $em=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:Forum");
         $forum=$em->findByvalidForum("0");
         return ($this->render("EspritDemandeBundle:Demande:traitementForum.html.twig",array("forums"=>$forum)));
    }  
    
    

   public function accepterAction($id){
       
       $em=$this->getDoctrine()->getManager();
        $demande=$em->getRepository("EspritDemandeBundle:DemandeService")->find($id);
        
       
       
       $demande->setValidServDem("valide");
       $em->persist($demande);
       $em->flush();
        return $this->redirectToRoute("liste_demande");    
}
public function accepterForumAction($idForum){
       
       $em=$this->getDoctrine()->getManager();
        $forum=$em->getRepository("EspritDemandeBundle:Forum")->find($idForum);
        
       
       
       $forum->setvalidForum(1);
       $em->persist($forum);
       $em->flush();
        return $this->redirectToRoute("traitement_forum");    
}
public function refuserForumAction($idForum){
        
       $em=$this->getDoctrine()->getManager();
       $forum=$em->getRepository("EspritDemandeBundle:Forum")->find($idForum);
       
       $em->remove($forum);
       
       $em->flush();
       
    
      
        return $this->redirectToRoute("acceuil2_demande");
}

   public function refuserAction($id){
        
       $em=$this->getDoctrine()->getManager();
       $demande=$em->getRepository("EspritDemandeBundle:DemandeService")->find($id);
       
       
       
       
       $demande->setvalidServDem("non valide");
       $em->persist($demande);
       $em->flush();
        //return $this->redirectToRoute("liste_demande");
}

    public function ajouterAction(){
        
        $el=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:Utilisateur");
         $user=$el->findOneByconnect("1");
           
        
       $request=$this->get('request');
        $d=new DemandeService();
        $form=$this->createForm(new DemandeForm(), $d);
        $form->handleRequest($request);
       
        if($form->isValid())
        {
            
                $em=$this->getDoctrine()->getManager();
                
               $d->setIdUserDemande($user);
                $em->persist($d);
                $em->flush();
                
                 if($em){
                $this->get('session')->getFlashBag()->add('AjoutSucces', 'ajouter avec succees');
//                if($em){
//                    $this->get('session')->getFlashBag()->add('DateExpire', 'impos annuler');
//                //echo "<DOCTYPE html> <script> alert('Ajout effectué avec succés'); </script>";
//                      return $this->redirectToRoute("acceuil_demande");   
//
           }else{
              $this->get('session')->getFlashBag()->add('AjoutEchec', 'impos annuler');
//                echo "<DOCTYPE html> <script> alert('Ajout echoué'); </script>";
//                        return $this->redirectToRoute("acceuil_demande");    
//
//            }
          
            
            //return ($this->redirectToRoute("liste_demande"));
        }
        }
       return ($this->render('EspritDemandeBundle:Demande:ajout.html.twig',array('form'=>$form->createView())));
       
       
}

     public function supprimerAction($id){
        
       $em=$this->getDoctrine()->getManager();
       $demande=$em->getRepository("EspritDemandeBundle:DemandeService")->find($id);
      
       $em->remove($demande);
       
       $em->flush();
       
       if($em){
                echo "<DOCTYPE html> <script> alert('Suppression effectué avec succés'); </script>";
                        return $this->render('EspritDemandeBundle:Acceuil:Acceuil.html.twig',array());  

            }else{
                echo "<DOCTYPE html> <script> alert('Supprssion echoué'); </script>";
                        return $this->redirectToRoute("acceuil_demande");    

            }
       
        return $this->redirectToRoute("liste_demande_personnel");
        
    }   
    public function updateAction($id){
        $em=$this->getDoctrine()->getManager();
        $demande=$em->getRepository('EspritDemandeBundle:DemandeService')->find($id);
        $form=$this->createForm(new DemandeForm2(),$demande );
        $request=$this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($demande);
            $em->flush();
            
            if($em){
                echo "<DOCTYPE html> <script> alert('Mise a jour effectué avec succés'); </script>";
                        return $this->redirectToRoute("acceuil_demande");   

            }else{
                echo "<DOCTYPE html> <script> alert('Mise a jour echoué'); </script>";
                        return $this->redirectToRoute("acceuil_demande");    

            }
            
            return $this->redirect($this->generateURL('liste_demande'));
        }
        return $this->render('EspritDemandeBundle:Demande:update.html.twig',
                array('form'=>$form->createView()));
}
public function acceuilAction(){
    
    return $this->render('EspritDemandeBundle:Acceuil:Acceuil.html.twig',array());
    
}

public function acceuil2Action(){
    
    return $this->render('EspritDemandeBundle:Admin:AdminSpace.html.twig',array());
    
}
public function contacterAction($idUser){
    
    $em=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:Utilisateur");
        $demande=$em->findByidUser($idUser);
       
 return ($this->render("EspritDemandeBundle:Demande:user.html.twig",array("demandes"=>$demande)));
}
public function contacter2Action($idUser){
    
    $em=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:Utilisateur");
        $demande=$em->findByidUser($idUser);
       
 return ($this->render("EspritDemandeBundle:Demande:user2.html.twig",array("demandes"=>$demande)));
}


public function ajouter2Action(){
    $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $objet = $request->get('objet_id');
            $description = $request->get('description_id');
            $categorie = $request->get('categorie_id');
            $lieu = $request->get('lieu_id');
            $date = $request->get('date_id');
            $user = $request->get('user_id');
            
            $demande=new DemandeService();
            $demande->setObjet($objet);
            $demande->setDescription($description);
            $demande->setCathegorie($categorie);
            $demande->setLieu($lieu);
            $m=new \DateTime($date);
            $demande->setDate($m);
            $demande->setIdUserDemande($user);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($demande);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Ajout du service avec succee !!');

            return $this->redirect($this->generateUrl("liste_demande"));
            
    
}
 return $this->render('EspritDemandeBundle:Demande:ajout2.html.twig');
}

public function listForumAction(){
    
             $reprostiry=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:Forum");

    
        $query=$reprostiry->createQueryBuilder('frm')->select('frm')
                        ->innerJoin('EspritDemandeBundle:Utilisateur', 'ut', 'with', 'ut.idUser=frm.idUserForum')
                     //  ->innerJoin('EspritDemandeBundle:CommentaireForum', 'ct', 'with', 'ct.idForumComm=frm.idForum')             
                                            ->where('frm.validForum =1')
                                           ->getQuery();                                 
         
         $forum=$query->getResult();
         
         
         
         
         
         
         
      
         return ($this->render("EspritDemandeBundle:Forum:list.html.twig",array("forums"=>$forum)));

}

public function listReclamationAction(){
    
             $reprostiry=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:ReclamationForum");

    
        $query=$reprostiry->createQueryBuilder('frm')->select('frm')
                        ->innerJoin('EspritDemandeBundle:Forum', 'ut', 'with', 'ut.idForum=frm.idForumRec')
                     //  ->innerJoin('EspritDemandeBundle:CommentaireForum', 'ct', 'with', 'ct.idForumComm=frm.idForum')             
                                           // ->groupBy('ut.idForum')
                                           ->getQuery();                                 
         
         $rec=$query->getResult();
         
         
      
         return ($this->render("EspritDemandeBundle:Forum:reclamationAdmin.html.twig",array("recs"=>$rec)));

}



 public function ajouterForumAction(){
        
        $el=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:Utilisateur");
         $user=$el->findOneByconnect("1");
           
        
       $request=$this->get('request');
        $d=new Forum();
        $form=$this->createForm(new ForumForm(), $d);
        $form->handleRequest($request);
       
        if($form->isValid())
        {
            
                $em=$this->getDoctrine()->getManager();
                
                $r=date("Y-m-d H:i:s");
               $d->setDateForum($r);
                
               $d->setidUserForum($user);
                $em->persist($d);
                $em->flush();
                
                 if($em){
                $this->get('session')->getFlashBag()->add('AjoutSucces', 'ajouter avec succees');
//                if($em){
//                    $this->get('session')->getFlashBag()->add('DateExpire', 'impos annuler');
//                //echo "<DOCTYPE html> <script> alert('Ajout effectué avec succés'); </script>";
//                      return $this->redirectToRoute("acceuil_demande");   
//
           }else{
              $this->get('session')->getFlashBag()->add('DateExpire', 'impos annuler');
//                echo "<DOCTYPE html> <script> alert('Ajout echoué'); </script>";
//                        return $this->redirectToRoute("acceuil_demande");    
//
//            }
          
            
            //return ($this->redirectToRoute("liste_demande"));
        }
        }
       return ($this->render('EspritDemandeBundle:Forum:ajout.html.twig',array('form'=>$form->createView())));
       
       
}

public function listCommentaireAction($idForumComm){
    
             $reprostiry=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:CommentaireForum");
            $commentaire=$reprostiry->findByidForumComm($idForumComm);
            
            
         
    $request=$this->get('request');
        $com=new CommentaireForum();
        $form=$this->createForm(new CommentaireForm(),$com);
        $form->handleRequest($request);
        
        
         if($form->isValid())
        {
             $el=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:Utilisateur");
         $user=$el->findOneByconnect("1");
         
         $el2=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:Forum");
         $user2=$el2->findOneByidForum($idForumComm);
         
         
            
                $em=$this->getDoctrine()->getManager();
                
                
                
                
               $com->setIdUserComm($user);
               $com->setIdForumComm($user2);
               
               $d=date("Y-m-d H:i:s");
               $com->setDateComm($d);
               
                $em->persist($com);
                $em->flush();
                
                 if($em){
                //$this->get('session')->getFlashBag()->add('AjoutSucces', 'ajouter avec succees');
//                if($em){
//                    $this->get('session')->getFlashBag()->add('DateExpire', 'impos annuler');
//                //echo "<DOCTYPE html> <script> alert('Ajout effectué avec succés'); </script>";
//                      return $this->redirectToRoute("acceuil_demande");   
                     //return $this->redirect($this->generateUrl("commentaire_forum"));
                      $reprostiry=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:CommentaireForum");
            $commentaire=$reprostiry->findByidForumComm($idForumComm);
                  return ($this->render("EspritDemandeBundle:Commentaire:list.html.twig",array("commentaires"=>$commentaire,'form'=>$form->createView())));
           }else{
              $this->get('session')->getFlashBag()->add('DateExpire', 'impos annuler');
//                echo "<DOCTYPE html> <script> alert('Ajout echoué'); </script>";
//                        return $this->redirectToRoute("acceuil_demande");    
//
//            }
          
            
            //return ($this->redirectToRoute("liste_demande"));
        }
        }
        
          // $commentaire2=$reprostiry->findOneBy(array('idForumComm' =>$idForumComm));
            //$reprostiry2=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:CommentaireForum");
            //$commentaire2=$reprostiry2>findByidForumComm($idForumComm);
            
           
            
          
        
         
        return ($this->render("EspritDemandeBundle:Commentaire:list.html.twig",array("commentaires"=>$commentaire,'form'=>$form->createView())));

}
public function ajouterCommAction($idForumComm){
   $el=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:Utilisateur");
         $user=$el->findOneByconnect("1");
    
     $request=$this->get('request');
        $com=new CommentaireForum();
        $form=$this->createForm(new CommentaireForm(),$com);
        $form->handleRequest($request);
    
            if($form->isValid())
        {
            
                $em=$this->getDoctrine()->getManager();
                
               $com->setidUserComm($user);
               $com->setIdForumComm($idForumComm);
               
                $em->persist($com);
                $em->flush();
                
                 if($em){
                $this->get('session')->getFlashBag()->add('AjoutSucces', 'ajouter avec succees');
//                if($em){
//                    $this->get('session')->getFlashBag()->add('DateExpire', 'impos annuler');
//                //echo "<DOCTYPE html> <script> alert('Ajout effectué avec succés'); </script>";
//                      return $this->redirectToRoute("acceuil_demande");   
//
           }else{
              $this->get('session')->getFlashBag()->add('DateExpire', 'impos annuler');
//                echo "<DOCTYPE html> <script> alert('Ajout echoué'); </script>";
//                        return $this->redirectToRoute("acceuil_demande");    
//
//            }
          
            
            //return ($this->redirectToRoute("liste_demande"));
        }
        }
       return ($this->render('EspritDemandeBundle:Commentaire:list.html.twig',array('form'=>$form->createView())));
    

}

public function ajouterReclamationAction($idForum){
        
       
           
        
       $request=$this->get('request');
        $r=new ReclamationForum();
        $form=$this->createForm(new ReclamationForumForm(), $r);
        $form->handleRequest($request);
       
        if($form->isValid())
        {
             $el=$this->getDoctrine()->getManager()->getRepository("EspritDemandeBundle:Forum");
         $forum=$el->findOneByidForum($idForum);
                $em=$this->getDoctrine()->getManager();
                
                $d=date("Y-m-d H:i:s");
               $r->setDateReclamation($d);
               
                $r->setIdForumRec($forum);
               
                $em->persist($r);
                $em->flush();
                
                 if($em){
                $this->get('session')->getFlashBag()->add('AjoutSucces', 'ajouter avec succees');
//                if($em){
//                    $this->get('session')->getFlashBag()->add('DateExpire', 'impos annuler');
//                //echo "<DOCTYPE html> <script> alert('Ajout effectué avec succés'); </script>";
//                      return $this->redirectToRoute("acceuil_demande");   
//
           }else{
              $this->get('session')->getFlashBag()->add('AjoutEchec', 'impos annuler');
//                echo "<DOCTYPE html> <script> alert('Ajout echoué'); </script>";
//                        return $this->redirectToRoute("acceuil_demande");    
//
//            }
          
            
            //return ($this->redirectToRoute("liste_demande"));
        }
        }
       return ($this->render('EspritDemandeBundle:Forum:reclamation.html.twig',array('form'=>$form->createView())));
       
       
}
}
