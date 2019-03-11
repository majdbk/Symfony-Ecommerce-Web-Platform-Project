<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Esprit\DemandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Description of CommentaireForum
 *
 * @author majd ben khalifa
 */

/**
 * CommentaireForum
 *
 * @ORM\Table(name="CommentaireForum", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_forum", columns={"id_forum"})})
 * @ORM\Entity
 */
class CommentaireForum {
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_commentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComm;
    
    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUserComm;
    
    /**
     * @var \Forum
     *
     * @ORM\ManyToOne(targetEntity="Forum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_forum", referencedColumnName="id_forum")
     * })
     */
    private $idForumComm;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=20, nullable=false)
     */
    private $commentaire;
    
    /**
     * @var string
     *
     * @ORM\Column(name="datecom", type="string", length=20, nullable=false)
     */
    private $dateComm;
    
    function getIdComm() {
        return $this->idComm;
    }

    function getIdUserComm() {
        return $this->idUserComm;
    }

    function getIdForumComm() {
        return $this->idForumComm;
    }

    function getCommentaire() {
        return $this->commentaire;
    }

    function setIdComm($idComm) {
        $this->idComm = $idComm;
    }

    function setIdUserComm($idUserComm) {
        $this->idUserComm = $idUserComm;
    }

    function setIdForumComm($idForumComm) {
        $this->idForumComm = $idForumComm;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    function getDateComm() {
        return $this->dateComm;
    }

    function setDateComm($dateComm) {
        $this->dateComm = $dateComm;
    }


    
}
