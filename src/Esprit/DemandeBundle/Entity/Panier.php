<?php

namespace Esprit\DemandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier", indexes={@ORM\Index(name="id_user_panier", columns={"id_user"}), @ORM\Index(name="id_produit", columns={"id_produit"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_panier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPanier;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produit", referencedColumnName="id_produit")
     * })
     */
    private $idProduit;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    function getIdPanier() {
        return $this->idPanier;
    }

    function getPrix() {
        return $this->prix;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getIdProduit() {
        return $this->idProduit;
    }

    function getIdUser() {
        return $this->idUser;
    }

    function setIdPanier($idPanier) {
        $this->idPanier = $idPanier;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setIdProduit(\Produit $idProduit) {
        $this->idProduit = $idProduit;
    }

    function setIdUser(\Utilisateur $idUser) {
        $this->idUser = $idUser;
    }


}
