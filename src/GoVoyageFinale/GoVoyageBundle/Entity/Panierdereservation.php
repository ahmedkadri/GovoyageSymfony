<?php

namespace GoVoyageFinale\GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panierdereservation
 *
 * @ORM\Table(name="panierdereservation", indexes={@ORM\Index(name="idClient", columns={"idClient"}), @ORM\Index(name="id_HotelR", columns={"id_HotelR"}), @ORM\Index(name="id_CroisiereR", columns={"id_CroisiereR"}), @ORM\Index(name="id_volR", columns={"id_volR"})})
 * @ORM\Entity
 */
class Panierdereservation
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
     * @var integer
     *
     * @ORM\Column(name="Quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreDeJoursH", type="integer", nullable=true)
     */
    private $nombredejoursh;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreDeNuitH", type="integer", nullable=true)
     */
    private $nombredenuith;

    /**
     * @var string
     *
     * @ORM\Column(name="chambre", type="string", nullable=true)
     */
    private $chambre;

    /**
     * @var \Croisiere
     *
     * @ORM\ManyToOne(targetEntity="Croisiere")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_CroisiereR", referencedColumnName="IdCroisiere")
     * })
     */
    private $idCroisierer;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="IdUser")
     * })
     */
    private $idclient;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_HotelR", referencedColumnName="IdHotel")
     * })
     */
    private $idHotelr;

    /**
     * @var \Vol
     *
     * @ORM\ManyToOne(targetEntity="Vol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_volR", referencedColumnName="IdVol")
     * })
     */
    private $idVolr;


}
