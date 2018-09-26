<?php

namespace GoVoyageFinale\GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vol
 *
 * @ORM\Table(name="vol", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Vol
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
     * @var string
     *
     * @ORM\Column(name="Prix", type="string", length=50, nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="NombrePlace", type="integer", nullable=false)
     */
    private $nombreplace;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateVol", type="date", nullable=false)
     */
    private $datevol;

    /**
     * @var string
     *
     * @ORM\Column(name="PaysDestination", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="Description", type="string", length=500, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="NomVol", type="string", length=100, nullable=false)
     */
    private $nomvol;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="IdUser")
     * })
     */
    private $idUser;


    function getIdvol() {
        return $this->idvol;
    }

    function getPrix() {
        return $this->prix;
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

    function getIdUser() {
        return $this->idUser;
    }

    function setIdvol($idvol) {
        $this->idvol = $idvol;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setNombreplace($nombreplace) {
        $this->nombreplace = $nombreplace;
    }

    function setDatevol(\DateTime $datevol) {
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

    function setIdUser(\User $idUser) {
        $this->idUser = $idUser;
    }
    
    public function __toString() {
        return $this->getNomvol();
    }

}
