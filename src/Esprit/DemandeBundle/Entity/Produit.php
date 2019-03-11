<?php

namespace Esprit\DemandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_prd", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixPrd;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_prd", type="string", length=20, nullable=false)
     */
    private $libellePrd;

    /**
     * @var string
     *
     * @ORM\Column(name="description_prd", type="string", length=20, nullable=false)
     */
    private $descriptionPrd;

    /**
     * @var string
     *
     * @ORM\Column(name="dateAjout_prd", type="string", length=20, nullable=false)
     */
    private $dateajoutPrd;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_prd", type="string", length=20, nullable=false)
     */
    private $categoriePrd;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="blob", nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="valid_prd", type="integer", nullable=true)
     */
    private $validPrd = '0';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    function getIdProduit() {
        return $this->idProduit;
    }

    function getPrixPrd() {
        return $this->prixPrd;
    }

    function getLibellePrd() {
        return $this->libellePrd;
    }

    function getDescriptionPrd() {
        return $this->descriptionPrd;
    }

    function getDateajoutPrd() {
        return $this->dateajoutPrd;
    }

    function getCategoriePrd() {
        return $this->categoriePrd;
    }

    function getImage() {
        return $this->image;
    }

    function getValidPrd() {
        return $this->validPrd;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function setIdProduit($idProduit) {
        $this->idProduit = $idProduit;
    }

    function setPrixPrd($prixPrd) {
        $this->prixPrd = $prixPrd;
    }

    function setLibellePrd($libellePrd) {
        $this->libellePrd = $libellePrd;
    }

    function setDescriptionPrd($descriptionPrd) {
        $this->descriptionPrd = $descriptionPrd;
    }

    function setDateajoutPrd($dateajoutPrd) {
        $this->dateajoutPrd = $dateajoutPrd;
    }

    function setCategoriePrd($categoriePrd) {
        $this->categoriePrd = $categoriePrd;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setValidPrd($validPrd) {
        $this->validPrd = $validPrd;
    }

    function setIdUser(\Utilisateur $idUser) {
        $this->idUser = $idUser;
    }


}
