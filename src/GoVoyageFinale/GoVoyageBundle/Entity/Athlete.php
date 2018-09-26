<?php

namespace GoVoyageFinale\GoVoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Athlete
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Athlete
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=255)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="ahmed", type="string", length=255)
     */
    private $ahmed;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Athlete
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set ahmed
     *
     * @param string $ahmed
     * @return Athlete
     */
    public function setAhmed($ahmed)
    {
        $this->ahmed = $ahmed;

        return $this;
    }

    /**
     * Get ahmed
     *
     * @return string 
     */
    public function getAhmed()
    {
        return $this->ahmed;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Athlete
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }
}
