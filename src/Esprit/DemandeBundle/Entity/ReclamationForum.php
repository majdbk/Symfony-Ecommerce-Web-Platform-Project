<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReclamationForum
 *
 * @author majd ben khalifa
 */

namespace Esprit\DemandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReclamationForum
 *
 * @ORM\Table(name="ReclamationForum", indexes={@ORM\Index(name="id_reclamation", columns={"id_reclamation"})})
 * @ORM\Entity(repositoryClass="Esprit\DemandeBundle\Entity\ReclamationForumRepository")
 */
class ReclamationForum {
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="categorie_reclamation", type="string", length=20, nullable=false)
     */
    private $categorieReclamation;
    
    /**
     * @var string
     *
     * @ORM\Column(name="raison_reclamation", type="string", length=20, nullable=false)
     */
    private $raisonReclamation;
    
    /**
     * @var \Forum
     *
     * @ORM\ManyToOne(targetEntity="Forum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_forum", referencedColumnName="id_forum")
     * })
     */
    private $idForumRec;
    
    /**
     * @var string
     *
     * @ORM\Column(name="date_reclamation", type="string", length=20, nullable=false)
     */
    private $dateReclamation;
    
    
    function getIdReclamation() {
        return $this->idReclamation;
    }

    function getCategorieReclamation() {
        return $this->categorieReclamation;
    }

    function getRaisonReclamation() {
        return $this->raisonReclamation;
    }

    function getIdForumRec() {
        return $this->idForumRec;
    }

    function setIdReclamation($idReclamation) {
        $this->idReclamation = $idReclamation;
    }

    function setCategorieReclamation($categorieReclamation) {
        $this->categorieReclamation = $categorieReclamation;
    }

    function setRaisonReclamation($raisonReclamation) {
        $this->raisonReclamation = $raisonReclamation;
    }

    function setIdForumRec($idForumRec) {
        $this->idForumRec = $idForumRec;
    }


    function getDateReclamation() {
        return $this->dateReclamation;
    }

    function setDateReclamation($dateReclamation) {
        $this->dateReclamation = $dateReclamation;
    }


    
    
    
}
