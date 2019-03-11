<?php

namespace Esprit\DemandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamations
 *
 * @ORM\Table(name="reclamations", indexes={@ORM\Index(name="id_user_rec", columns={"id_user_rec", "id_service_rec"}), @ORM\Index(name="id_service_rec", columns={"id_service_rec"}), @ORM\Index(name="IDX_1CAD6B76DFC84732", columns={"id_user_rec"})})
 * @ORM\Entity
 */
class Reclamations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRec;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_rec", type="string", length=30, nullable=false)
     */
    private $descRec;

    /**
     * @var string
     *
     * @ORM\Column(name="date_rec", type="string", length=20, nullable=false)
     */
    private $dateRec;

    /**
     * @var string
     *
     * @ORM\Column(name="raison", type="string", length=20, nullable=false)
     */
    private $raison;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbRec_Serv", type="integer", nullable=true)
     */
    private $nbrecServ;

    /**
     * @var \OffreService
     *
     * @ORM\ManyToOne(targetEntity="OffreService")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_service_rec", referencedColumnName="id_serv_prop")
     * })
     */
    private $idServiceRec;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user_rec", referencedColumnName="id_user")
     * })
     */
    private $idUserRec;

    function getIdRec() {
        return $this->idRec;
    }

    function getDescRec() {
        return $this->descRec;
    }

    function getDateRec() {
        return $this->dateRec;
    }

    function getRaison() {
        return $this->raison;
    }

    function getNbrecServ() {
        return $this->nbrecServ;
    }

    function getIdServiceRec() {
        return $this->idServiceRec;
    }

    function getIdUserRec() {
        return $this->idUserRec;
    }

    function setIdRec($idRec) {
        $this->idRec = $idRec;
    }

    function setDescRec($descRec) {
        $this->descRec = $descRec;
    }

    function setDateRec($dateRec) {
        $this->dateRec = $dateRec;
    }

    function setRaison($raison) {
        $this->raison = $raison;
    }

    function setNbrecServ($nbrecServ) {
        $this->nbrecServ = $nbrecServ;
    }

    function setIdServiceRec(\OffreService $idServiceRec) {
        $this->idServiceRec = $idServiceRec;
    }

    function setIdUserRec(\Utilisateur $idUserRec) {
        $this->idUserRec = $idUserRec;
    }


}
