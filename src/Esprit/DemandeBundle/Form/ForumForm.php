<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ForumForm
 *
 * @author majd ben khalifa
 */

namespace Esprit\DemandeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ForumForm extends AbstractType {
    
     public function buildForm(FormBuilderInterface $builder, array $options) {
      $builder
              
             
                
                ->add('CategorieForum',"choice",array ('choices' => array('Offre Produit'=>'Offre Produit','Offre Service'=>'Offre Service','Demande Service'=>'Demande Service',
                     'Autre'=>'Autre') ,"attr"=>array("placeholder"=>"Categorie Service",'class'=>'form-control input-sm')))
               ->add('libelleForum',"text",array ("attr"=>array("placeholder"=>"sujet")))
              
              
  
              
              
//              ->add('idUserDemande','entity',
//                 array('class'=>'EspritDemandeBundle:Utilisateur',
//                    'property'=>'idUser', 'label'=>'lutilisateur  est : '),array ("attr"=>array("placeholder"=>"user",'class'=>'form-control input-sm')))
              
            ->add('ajouter','submit',array ("attr"=>array("placeholder"=>"objet",'class'=>'btn btn-success')))  
      ->add('reset','reset',array ("attr"=>array("placeholder"=>"objet",'class'=>'btn btn-warning')))  ;
    
    }
    public function getName() {
         return 'esprit_demandebundle_forum';
    }

//put your code here
}
