<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReclamationForumForm
 *
 * @author majd ben khalifa
 */

namespace Esprit\DemandeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ReclamationForumForm extends AbstractType {
    

     public function buildForm(FormBuilderInterface $builder, array $options) {
      $builder
    
    
    ->add('categorieReclamation',"choice",array ('choices' => array('Contenu indiserable'=>'Contenu indiserable','Harcelemnet'=>'Harcelement','Spam'=>'Spam',
                     'Autre'=>'Autre') ,"attr"=>array("placeholder"=>"Choisir Motif",'class'=>'form-control input-sm')))
    ->add('raisonReclamation',"text",array ("attr"=>array("placeholder"=>"sujet")))
    
   ;
    
    }
    public function getName() {
         return 'esprit_demandebundle_reclamationforum';
    }

//put your code here
}

