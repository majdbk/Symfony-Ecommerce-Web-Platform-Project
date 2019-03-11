<?php

namespace Esprit\DemandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service", indexes={@ORM\Index(name="id_user_service", columns={"id_user_service"})})
 * @ORM\Entity
 */
class Service
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
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=50, nullable=false)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=50, nullable=false)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="dateajout", type="string", length=20, nullable=false)
     */
    private $dateajout;

    /**
     * @var string
     *
     * @ORM\Column(name="noteevaluation", type="string", length=20, nullable=false)
     */
    private $noteevaluation;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user_service", referencedColumnName="id_user")
     * })
     */
    private $idUserService;

    function getId() {
        return $this->id;
    }

    function getDescription() {
        return $this->description;
    }

    function getDuree() {
        return $this->duree;
    }

    function getLieu() {
        return $this->lieu;
    }

    function getDateajout() {
        return $this->dateajout;
    }

    function getNoteevaluation() {
        return $this->noteevaluation;
    }

    function getIdUserService() {
        return $this->idUserService;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setDuree($duree) {
        $this->duree = $duree;
    }

    function setLieu($lieu) {
        $this->lieu = $lieu;
    }

    function setDateajout($dateajout) {
        $this->dateajout = $dateajout;
    }

    function setNoteevaluation($noteevaluation) {
        $this->noteevaluation = $noteevaluation;
    }

    function setIdUserService(\Utilisateur $idUserService) {
        $this->idUserService = $idUserService;
    }


}
