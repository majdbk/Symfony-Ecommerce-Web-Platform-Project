<?php

namespace Esprit\DemandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="id_produit", columns={"id_produit"})})
 * @ORM\Entity
 */
class Commentaire
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
     * @ORM\Column(name="commentaire", type="string", length=100, nullable=false)
     */
    private $commentaire;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produit", referencedColumnName="id_produit")
     * })
     */
    private $idProduit;

    function getId() {
        return $this->id;
    }

    function getCommentaire() {
        return $this->commentaire;
    }

    function getIdProduit() {
        return $this->idProduit;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    function setIdProduit(\Produit $idProduit) {
        $this->idProduit = $idProduit;
    }


}
