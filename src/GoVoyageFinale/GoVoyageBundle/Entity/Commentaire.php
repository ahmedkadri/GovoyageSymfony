<?php

namespace GoVoyageFinale\GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="id_clientC", columns={"id_clientC"}), @ORM\Index(name="id_croisiere", columns={"id_croisiere"}), @ORM\Index(name="id_HotelC", columns={"id_HotelC"}), @ORM\Index(name="id_VolC", columns={"id_VolC"})})
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
     * @ORM\Column(name="text", type="string", length=500, nullable=false)
     */
    private $text;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_clientC", referencedColumnName="IdUser")
     * })
     */
    private $idClientc;

    /**
     * @var \Croisiere
     *
     * @ORM\ManyToOne(targetEntity="Croisiere")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_croisiere", referencedColumnName="IdCroisiere")
     * })
     */
    private $idCroisiere;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_HotelC", referencedColumnName="IdHotel")
     * })
     */
    private $idHotelc;

    /**
     * @var \Vol
     *
     * @ORM\ManyToOne(targetEntity="Vol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_VolC", referencedColumnName="IdVol")
     * })
     */
    private $idVolc;


}
