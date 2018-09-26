<?php

namespace GoVoyageFinale\GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdUser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="Login", type="string", length=30, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="MotDePasse", type="string", length=15, nullable=false)
     */
    private $motdepasse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estBlock", type="boolean", nullable=true)
     */
    private $estblock;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=30, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=500, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=500, nullable=false)
     */
    private $prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeOffrant", type="string", nullable=true)
     */
    private $typeoffrant;

    /**
     * @var string
     *
     * @ORM\Column(name="RoleUsers", type="string", nullable=true)
     */
    private $roleusers;


}
