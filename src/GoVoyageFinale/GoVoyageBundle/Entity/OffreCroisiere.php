<?php

namespace GoVoyageFinale\GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreCroisiere
 *
 * @ORM\Table(name="offre_croisiere")
 * @ORM\Entity
 */
class OffreCroisiere
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
     * @var integer
     *
     * @ORM\Column(name="Reduction", type="integer", nullable=false)
     */
    private $reduction;

    /**
     * @var string
     *
     * @ORM\Column(name="Nomcrois", type="string", length=50, nullable=false)
     */
    private $nomcrois;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="NombrePlace", type="integer", nullable=false)
     */
    private $nombreplace;

    /**
     * @var string
     *
     * @ORM\Column(name="DateDepart", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="Description", type="string", length=50, nullable=false)
     */
    private $description;

    function getIdcroisiere() {
        return $this->idcroisiere;
    }

    function getReduction() {
        return $this->reduction;
    }

    function getNomcrois() {
        return $this->nomcrois;
    }

    function getPrix() {
        return $this->prix;
    }

    function getDateDebut() {
        return $this->dateDebut;
    }

    function getDateFin() {
        return $this->dateFin;
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

    function setIdcroisiere($idcroisiere) {
        $this->idcroisiere = $idcroisiere;
    }

    function setReduction($reduction) {
        $this->reduction = $reduction;
    }

    function setNomcrois($nomcrois) {
        $this->nomcrois = $nomcrois;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setDateDebut(\DateTime $dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    function setDateFin(\DateTime $dateFin) {
        $this->dateFin = $dateFin;
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


    
}
