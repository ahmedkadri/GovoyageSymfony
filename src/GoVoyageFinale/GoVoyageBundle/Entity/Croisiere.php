<?php

namespace GoVoyageFinale\GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Croisiere
 *
 * @ORM\Table(name="croisiere", indexes={@ORM\Index(name="id_user", columns={"IdUser"})})
 * @ORM\Entity
 */
class Croisiere
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdCroisiere", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcroisiere;

    /**
     * @var string
     *
     * @ORM\Column(name="NomCrois", type="string", length=500, nullable=false)
     */
    private $nomcrois;

    /**
     * @var string
     *
     * @ORM\Column(name="Prix", type="string", length=500, nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="NombrePlace", type="integer", nullable=false)
     */
    private $nombreplace;

    /**
     * @var string
     *
     * @ORM\Column(name="DateDepart", type="string", length=500, nullable=false)
     */
    private $datedepart;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBJour", type="integer", nullable=false)
     */
    private $nbjour;

    /**
     * @var string
     *
     * @ORM\Column(name="VilleDepart", type="string", length=50, nullable=false)
     */
    private $villedepart;

    /**
     * @var string
     *
     * @ORM\Column(name="VilleDestination", type="string", length=50, nullable=false)
     */
    private $villedestination;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=500, nullable=false)
     */
    private $description;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdUser", referencedColumnName="IdUser")
     * })
     */
    private $iduser;


    function getIdcroisiere() {
        return $this->idcroisiere;
    }

    function getNomcrois() {
        return $this->nomcrois;
    }

    function getPrix() {
        return $this->prix;
    }

    function getNombreplace() {
        return $this->nombreplace;
    }

    function getDatedepart() {
        return $this->datedepart;
    }

    function getNbjour() {
        return $this->nbjour;
    }

    function getVilledepart() {
        return $this->villedepart;
    }

    function getVilledestination() {
        return $this->villedestination;
    }

    function getDescription() {
        return $this->description;
    }

    function getIduser() {
        return $this->iduser;
    }

    function setIdcroisiere($idcroisiere) {
        $this->idcroisiere = $idcroisiere;
    }

    function setNomcrois($nomcrois) {
        $this->nomcrois = $nomcrois;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setNombreplace($nombreplace) {
        $this->nombreplace = $nombreplace;
    }

    function setDatedepart($datedepart) {
        $this->datedepart = $datedepart;
    }

    function setNbjour($nbjour) {
        $this->nbjour = $nbjour;
    }

    function setVilledepart($villedepart) {
        $this->villedepart = $villedepart;
    }

    function setVilledestination($villedestination) {
        $this->villedestination = $villedestination;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setIduser(\User $iduser) {
        $this->iduser = $iduser;
    }


}
