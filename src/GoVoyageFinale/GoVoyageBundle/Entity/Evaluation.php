<?php

namespace GoVoyageFinale\GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", indexes={@ORM\Index(name="id_clientE", columns={"id_clientE"}), @ORM\Index(name="id_croisiereE", columns={"id_croisiereE"}), @ORM\Index(name="id_HotelV", columns={"id_HotelV"}), @ORM\Index(name="id_volE", columns={"id_volE"})})
 * @ORM\Entity
 */
class Evaluation
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
     * @ORM\Column(name="nbEval", type="integer", nullable=false)
     */
    private $nbeval;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_clientE", referencedColumnName="IdUser")
     * })
     */
    private $idCliente;

    /**
     * @var \Croisiere
     *
     * @ORM\ManyToOne(targetEntity="Croisiere")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_croisiereE", referencedColumnName="IdCroisiere")
     * })
     */
    private $idCroisieree;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_HotelV", referencedColumnName="IdHotel")
     * })
     */
    private $idHotelv;

    /**
     * @var \Vol
     *
     * @ORM\ManyToOne(targetEntity="Vol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_volE", referencedColumnName="IdVol")
     * })
     */
    private $idVole;


}
