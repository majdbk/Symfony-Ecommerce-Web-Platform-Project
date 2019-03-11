<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReclamationForumRepository
 *
 * @author majd ben khalifa
 */
namespace Esprit\DemandeBundle\Entity;
use Doctrine\ORM\EntityRepository;

class ReclamationForumRepository extends EntityRepository {
    
   public function NbIdeesCat($cathegorie){
    
	
 $query=$this->getEntityManager()
            ->createQuery("SELECT count(u) as number FROM EspritDemandeBundle:ReclamationForum u where u.categorieReclamation=:categorieReclamation")
            ->setParameter('categorieReclamation',$cathegorie);
    //  return $query->getResult();
 return $query->getResult()[0]['number'];
  
 }
}
