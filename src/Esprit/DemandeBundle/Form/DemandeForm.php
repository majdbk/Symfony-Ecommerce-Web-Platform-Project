<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DemandeForm
 *
 * @author majd ben khalifa
 */
namespace Esprit\DemandeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Button;
use Symfony\Component\Form\ButtonBuilder;
use Symfony\Component\Form\ButtonTypeInterface;

class DemandeForm extends AbstractType {
   
    
     public function buildForm(FormBuilderInterface $builder, array $options) {
      $builder
              
              ->add('objet',"text",array ("attr"=>array("placeholder"=>"objet ")))
                ->add('description',"text",array ("attr"=>array("placeholder"=>"description")))
                ->add('cathegorie',"choice",array ('choices' => array('Categorie'=>'Categorie','Animalerie'=>'Animalerie','Transport'=>'Transport',
                     'Education'=>'Education','Maintenance'=>'Maintenance','Divers'=>'Divers') ,"attr"=>array("placeholder"=>"Categorie Service",'class'=>'form-control input-sm')))
               
              ->add('lieu','choice',array(
                   'choices'=>array('Lieu'=>'Lieu','Bizerte'=>'Bizerte','Nabeul'=>'Nabeul',
                     'Ariana'=>'Ariana','Sousse'=>'Sousse','Touzer'=>'Touzer'),"attr"=>array("placeholder"=>"Categorie Service",'class'=>'form-control input-sm')))
               //->add('date','date',array ("attr"=>array("placeholder"=>"date",'class'=>'form-control input-sm')))
  ->add('date','date',array('widget'=>'single_text'
        ));
              
              
//              ->add('idUserDemande','entity',
//                 array('class'=>'EspritDemandeBundle:Utilisateur',
//                    'property'=>'idUser', 'label'=>'lutilisateur  est : '),array ("attr"=>array("placeholder"=>"user",'class'=>'form-control input-sm')))
              
          //  ->add('ajouter','submit',array ("attr"=>array("placeholder"=>"objet",'class'=>'btn btn-success')))  
     // ->add('reset','reset',array ("attr"=>array("placeholder"=>"objet",'class'=>'btn btn-success')))  ;
      
      
              
    }
    
    
    
    
    
    
    public function getName() {
        return 'esprit_demandebundle_demandeservice';
    }


}
