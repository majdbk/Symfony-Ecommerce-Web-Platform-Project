<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ForumRepository
 *
 * @author majd ben khalifa
 */

namespace Esprit\DemandeBundle\Entity;
use Doctrine\ORM\EntityRepository;

class ForumRepository extends EntityRepository {
    
    public function lesCommentaires($m){
     
     $query=$this->getEntityManager()
     ->createQuery("SELECT u FROM EspritDemandeBundle:CommentaireForum u join u.idUserComm a where u.idUserComm=:user")
            ->setParameter('user',$m);
    //  return $query->getResult();
 return $query->getResult();
 }
 
  public function NbIdeesForum($cathegorie){
    
	
 $query=$this->getEntityManager()
            ->createQuery("SELECT count(u) as number FROM EspritDemandeBundle:Forum u where u.CategorieForum=:CategorieForum")
            ->setParameter('CategorieForum',$cathegorie);
    //  return $query->getResult();
 return $query->getResult()[0]['number'];
  
 }
    
}
