<?php

namespace Esprit\DemandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Forum
 *
 * @author majd ben khalifa
 */

/**
 * Forum
 *
 * @ORM\Table(name="Forum", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity(repositoryClass="Esprit\DemandeBundle\Entity\ForumRepository")
 */
class Forum {
   
    /**
     * @var integer
     *
     * @ORM\Column(name="id_forum", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idForum;
    
    /**
     * @var string
     *
     * @ORM\Column(name="categorie_forum", type="string", length=20, nullable=false)
     */
    private $CategorieForum;
    
    /**
     * @var string
     *
     * @ORM\Column(name="libelle_forum", type="string", length=20, nullable=false)
     */
    private $libelleForum;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valid_forum", type="integer", nullable=true)
     */
    private $validForum=0;
    
    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUserForum;
    
    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20, nullable=false)
     */
    private $dateForum;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nombreCom", type="integer", length=20, nullable=true)
     */
    private $nombreCom;
    
    function getIdForum() {
        return $this->idForum;
    }

    function getCategorieForum() {
        return $this->CategorieForum;
    }

    function getLibelleForum() {
        return $this->libelleForum;
    }

    function getValidForum() {
        return $this->validForum;
    }

    function getIdUserForum() {
        return $this->idUserForum;
    }

    function setIdForum($idForum) {
        $this->idForum = $idForum;
    }

    function setCategorieForum($CategorieForum) {
        $this->CategorieForum = $CategorieForum;
    }

    function setLibelleForum($libelleForum) {
        $this->libelleForum = $libelleForum;
    }

    function setValidForum($validForum) {
        $this->validForum = $validForum;
    }

    function setIdUserForum( $idUserForum) {
        $this->idUserForum = $idUserForum;
    }

    function getDate() {
        return $this->date;
    }

    function setDate( $date) {
        $this->date = $date;
    }

    function getDateForum() {
        return $this->dateForum;
    }

    function setDateForum( $dateForum) {
        $this->dateForum = $dateForum;
    }

    function getNombreCom() {
        return $this->nombreCom;
    }

    function setNombreCom($nombreCom) {
        $this->nombreCom = $nombreCom;
    }


    
}
