<?php

namespace Esprit\DemandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_user", type="string", length=20, nullable=false)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_user", type="string", length=20, nullable=false)
     */
    private $prenomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_user", type="string", length=50, nullable=false)
     */
    private $adresseUser;

    /**
     * @var string
     *
     * @ORM\Column(name="email_user", type="string", length=50, nullable=false)
     */
    private $emailUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel_user", type="integer", nullable=false)
     */
    private $telUser;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_user", type="string", length=20, nullable=false)
     */
    private $statutUser;

    /**
     * @var string
     *
     * @ORM\Column(name="login_user", type="string", length=50, nullable=false)
     */
    private $loginUser;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd_user", type="string", length=50, nullable=false)
     */
    private $pwdUser;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe_user", type="string", length=20, nullable=false)
     */
    private $sexeUser;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_user", type="blob", nullable=false)
     */
    private $photoUser;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="connect", type="integer", nullable=true, length=1)
     */
    private $connect;
    
    
    function getConnect() {
        return $this->connect;
    }

    function setConnect($connect) {
        $this->connect = $connect;
    }

    
    function getIdUser() {
        return $this->idUser;
    }

    function getNomUser() {
        return $this->nomUser;
    }

    function getPrenomUser() {
        return $this->prenomUser;
    }

    function getAdresseUser() {
        return $this->adresseUser;
    }

    function getEmailUser() {
        return $this->emailUser;
    }

    function getTelUser() {
        return $this->telUser;
    }

    function getStatutUser() {
        return $this->statutUser;
    }

    function getLoginUser() {
        return $this->loginUser;
    }

    function getPwdUser() {
        return $this->pwdUser;
    }

    function getSexeUser() {
        return $this->sexeUser;
    }

    function getPhotoUser() {
        return $this->photoUser;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function setNomUser($nomUser) {
        $this->nomUser = $nomUser;
    }

    function setPrenomUser($prenomUser) {
        $this->prenomUser = $prenomUser;
    }

    function setAdresseUser($adresseUser) {
        $this->adresseUser = $adresseUser;
    }

    function setEmailUser($emailUser) {
        $this->emailUser = $emailUser;
    }

    function setTelUser($telUser) {
        $this->telUser = $telUser;
    }

    function setStatutUser($statutUser) {
        $this->statutUser = $statutUser;
    }

    function setLoginUser($loginUser) {
        $this->loginUser = $loginUser;
    }

    function setPwdUser($pwdUser) {
        $this->pwdUser = $pwdUser;
    }

    function setSexeUser($sexeUser) {
        $this->sexeUser = $sexeUser;
    }

    function setPhotoUser($photoUser) {
        $this->photoUser = $photoUser;
    }


}
