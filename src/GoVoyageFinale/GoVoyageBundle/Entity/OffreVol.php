<?php

namespace GoVoyageFinale\GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreVol
 *
 * @ORM\Table(name="offre_vol")
 * @ORM\Entity
 */
class OffreVol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdVol", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvol;

    /**
     * @var integer
     *
     * @ORM\Column(name="Reduction", type="integer", nullable=false)
     */
    private $reduction;

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
     * @var \DateTime
     *
     * @ORM\Column(name="DateVol", type="date",  nullable=false)
     */
    private $datevol;

    /**
     * @var string
     *
     * @ORM\Column(name="PaysDestination", type="string",length=50, nullable=false)
     */
    private $paysdestination;

    /**
     * @var string
     *
     * @ORM\Column(name="PaysDepart", type="string", length=50, nullable=false)
     */
    private $paysdepart;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=50, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="NomVol", type="string", length=50, nullable=false)
     */
    private $nomvol;

    function getIdvol() {
        return $this->idvol;
    }

    function getReduction() {
        return $this->reduction;
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

    function getDatevol() {
        return $this->datevol;
    }

    function getPaysdestination() {
        return $this->paysdestination;
    }

    function getPaysdepart() {
        return $this->paysdepart;
    }

    function getDescription() {
        return $this->description;
    }

    function getNomvol() {
        return $this->nomvol;
    }

    function setIdvol($idvol) {
        $this->idvol = $idvol;
    }

    function setReduction($reduction) {
        $this->reduction = $reduction;
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

    function setDatevol($datevol) {
        $this->datevol = $datevol;
    }

    function setPaysdestination($paysdestination) {
        $this->paysdestination = $paysdestination;
    }

    function setPaysdepart($paysdepart) {
        $this->paysdepart = $paysdepart;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setNomvol($nomvol) {
        $this->nomvol = $nomvol;
    }


    
}
