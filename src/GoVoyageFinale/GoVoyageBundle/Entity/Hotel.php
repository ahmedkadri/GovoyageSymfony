<?php

namespace GoVoyageFinale\GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel", uniqueConstraints={@ORM\UniqueConstraint(name="Id", columns={"IdHotel"}), @ORM\UniqueConstraint(name="Nomhotel", columns={"Nomhotel"})}, indexes={@ORM\Index(name="id_user", columns={"IdUser"})})
 * @ORM\Entity
 */
class Hotel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdHotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhotel;

    /**
     * @var string
     *
     * @ORM\Column(name="Nomhotel", type="string", length=100, nullable=false)
     */
    private $nomhotel;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBEtoile", type="integer", nullable=false)
     */
    private $nbetoile;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=500, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ChambreType", type="string", length=500, nullable=false)
     */
    private $chambretype;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=50, nullable=false)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="NombrePlace", type="integer", nullable=true)
     */
    private $nombreplace;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrixPC", type="integer", nullable=false)
     */
    private $prixpc;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrixDP", type="integer", nullable=false)
     */
    private $prixdp;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrixLPD", type="integer", nullable=false)
     */
    private $prixlpd;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="string", length=50, nullable=false)
     */
    private $photo;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdUser", referencedColumnName="IdUser")
     * })
     */
    private $iduser;

    function getIdhotel() {
        return $this->idhotel;
    }

    function getNomhotel() {
        return $this->nomhotel;
    }

    function getNbetoile() {
        return $this->nbetoile;
    }

    function getDescription() {
        return $this->description;
    }

    function getChambretype() {
        return $this->chambretype;
    }

    function getVille() {
        return $this->ville;
    }

    function getNombreplace() {
        return $this->nombreplace;
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

    function getPhoto() {
        return $this->photo;
    }

    function getIduser() {
        return $this->iduser;
    }

    function setIdhotel($idhotel) {
        $this->idhotel = $idhotel;
    }

    
   
    function setNomhotel($nomhotel) {
        $this->nomhotel = $nomhotel;
    }

    function setNbetoile($nbetoile) {
        $this->nbetoile = $nbetoile;
    }

   
    function setDescription($description) {
        $this->description = $description;
    }

    
    function setChambretype($chambretype) {
        $this->chambretype = $chambretype;
    }

   
    function setVille($ville) {
        $this->ville = $ville;
    }

    function setNombreplace($nombreplace) {
        $this->nombreplace = $nombreplace;
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
   

    function setPhoto($photo) {
        $this->photo = $photo;
    }

    function setIduser(\User $iduser) {
        $this->iduser = $iduser;
    }


}
