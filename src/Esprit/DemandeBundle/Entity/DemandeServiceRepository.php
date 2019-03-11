<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DemandeServiceRepository
 *
 * @author majd ben khalifa
 */
namespace Esprit\DemandeBundle\Entity;
use Doctrine\ORM\EntityRepository;

class DemandeServiceRepository extends EntityRepository {
    
    public function NbIdeesType($cathegorie){
    
	
 $query=$this->getEntityManager()
            ->createQuery("SELECT count(u) as number FROM EspritDemandeBundle:DemandeService u where u.cathegorie=:cathegorie")
            ->setParameter('cathegorie',$cathegorie);
    //  return $query->getResult();
 return $query->getResult()[0]['number'];
  
 }
 
 public function NbIdeesLieu($lieu){
    
	
 $query=$this->getEntityManager()
            ->createQuery("SELECT count(u) as number FROM EspritDemandeBundle:DemandeService u where u.lieu=:lieu")
            ->setParameter('lieu',$lieu);
    //  return $query->getResult();
 return $query->getResult()[0]['number'];
  
 }
 
 public function MesDemandes(){
     
     $query=$this->getEntityManager()
     ->createQuery("SELECT u FROM EspritDemandeBundle:DemandeService u join u.idUserDemande a where a.connect=1");
            
    //  return $query->getResult();
 return $query->getResult();
 }
 public function majd($m){
     
     $query=$this->getEntityManager()
     ->createQuery("SELECT u FROM EspritDemandeBundle:DemandeService u join u.idUserDemande a where u.cathegorie=:cathegorie and a.connect=1")
            ->setParameter('cathegorie',$m);
    //  return $query->getResult();
 return $query->getResult();
 }
 
 public function NbIdeesVal($valid_serv_dem){
    
	
 $query=$this->getEntityManager()
            ->createQuery("SELECT count(u) as number FROM EspritDemandeBundle:DemandeService u where u.valid_serv_dem=:valid_serv_dem")
            ->setParameter('valid_serv_dem',$valid_serv_dem);
    //  return $query->getResult();
 return $query->getResult()[0]['number'];
  
 }
    
}
