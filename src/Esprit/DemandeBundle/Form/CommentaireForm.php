<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommentaireForm
 *
 * @author majd ben khalifa
 */

namespace Esprit\DemandeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CommentaireForm extends AbstractType{
   
    public function buildForm(FormBuilderInterface $builder, array $options) {
      $builder
              
             
                
                
               ->add('commentaire',"text",array ("attr"=>array("placeholder"=>"Type Here...",'class'=>'form-control input-sm')))
              
  
              
              
//              ->add('idUserDemande','entity',
//                 array('class'=>'EspritDemandeBundle:Utilisateur',
//                    'property'=>'idUser', 'label'=>'lutilisateur  est : '),array ("attr"=>array("placeholder"=>"user",'class'=>'form-control input-sm')))
              
             
      ->add('ajouter','submit',array ("attr"=>array("placeholder"=>"objet",'class'=>'btn btn-default_2')))  ;
    
    }
    
    
    
    
    public function getName() {
        
         return 'esprit_demandebundle_commentaireforum';
        
    }

//put your code here
}
