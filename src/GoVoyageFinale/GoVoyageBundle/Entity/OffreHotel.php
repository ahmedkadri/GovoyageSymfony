<?php

namespace GoVoyageFinale\GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffreHotel
 *
 * @ORM\Table(name="offre_hotel")
 * @ORM\Entity
 */
class OffreHotel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idHotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhotel;

    /**
     * @var integer
     *
     * @ORM\Column(name="Reduction", type="integer", nullable=false)
     */
    private $reduction;

    /**
     * @var string
     *
     * @ORM\Column(name="NomHotel", type="string", length=50, nullable=false)
     */
    private $nomhotel;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=50, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     */
    private $description;

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
     * @var float
     *
     * @ORM\Column(name="PrixPC", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixpc;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixDP", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixdp;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixLPD", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixlpd;

    /**
     * @var string
     *
     * @ORM\Column(name="ChambreType", type="string", length=50, nullable=false)
     */
    private $chambretype;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBEtoiles", type="integer", nullable=false)
     */
    private $nbetoiles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Disponibiliter", type="integer", nullable=false)
     */
    private $disponibiliter;

    function getIdhotel() {
        return $this->idhotel;
    }

    function getReduction() {
        return $this->reduction;
    }

    function getNomhotel() {
        return $this->nomhotel;
    }

    function getVille() {
        return $this->ville;
    }

    function getDescription() {
        return $this->description;
    }

    function getDateDebut() {
        return $this->dateDebut;
    }

    function getDateFin() {
        return $this->dateFin;
    }

    function getPrixpc() {
        return $this->prixpc;
    }

    function getPrixdp() {
        return $this->prixdp;
    }

    function getPrixlpd() {
        return $this->prixlpd;
    }

    function getChambretype() {
        return $this->chambretype;
    }

    function getNbetoiles() {
        return $this->nbetoiles;
    }

    function getDisponibiliter() {
        return $this->disponibiliter;
    }

    function setIdhotel($idhotel) {
        $this->idhotel = $idhotel;
    }

    function setReduction($reduction) {
        $this->reduction = $reduction;
    }

    function setNomhotel($nomhotel) {
        $this->nomhotel = $nomhotel;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setDateDebut(\DateTime $dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    function setDateFin(\DateTime $dateFin) {
        $this->dateFin = $dateFin;
    }

    function setPrixpc($prixpc) {
        $this->prixpc = $prixpc;
    }

    function setPrixdp($prixdp) {
        $this->prixdp = $prixdp;
    }

    function setPrixlpd($prixlpd) {
        $this->prixlpd = $prixlpd;
    }

    function setChambretype($chambretype) {
        $this->chambretype = $chambretype;
    }

    function setNbetoiles($nbetoiles) {
        $this->nbetoiles = $nbetoiles;
    }

    function setDisponibiliter($disponibiliter) {
        $this->disponibiliter = $disponibiliter;
    }


}
