<?php

namespace Esprit\DemandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeService
 *
 * @ORM\Table(name="demande_service", indexes={@ORM\Index(name="id_user_demande", columns={"id_user_demande"})})
 * @ORM\Entity(repositoryClass="Esprit\DemandeBundle\Entity\DemandeServiceRepository")
 */
class DemandeService
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=200, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=20, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="cathegorie", type="string", length=20, nullable=false)
     */
    private $cathegorie;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=20, nullable=false)
     */
    private $lieu;

    /**
     * @var date
     *
     * @ORM\Column(name="date", type="date", length=20, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="valid_serv_dem", type="string", nullable=true)
     */
    private $validServDem="en cours";

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user_demande", referencedColumnName="id_user")
     * })
     */
    private $idUserDemande;

    function __construct() {
        $this->idUserDemande=1;    
    }
    
    function getId() {
        return $this->id;
    }

    function getObjet() {
        return $this->objet;
    }

    function getDescription() {
        return $this->description;
    }

    function getCathegorie() {
        return $this->cathegorie;
    }

    function getLieu() {
        return $this->lieu;
    }

    function getDate() {
        return $this->date;
    }

    function getValidServDem() {
        return $this->validServDem;
    }

    function getIdUserDemande() {
        return $this->idUserDemande;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setObjet($objet) {
        $this->objet = $objet;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setCathegorie($cathegorie) {
        $this->cathegorie = $cathegorie;
    }

    function setLieu($lieu) {
        $this->lieu = $lieu;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setValidServDem($validServDem) {
        $this->validServDem = $validServDem;
    }

    function setIdUserDemande($idUserDemande) {
        $this->idUserDemande = $idUserDemande;
    }


}
