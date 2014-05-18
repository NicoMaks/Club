<?php

namespace Aiki\SubscribeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autority
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Aiki\SubscribeBundle\Entity\AutorityRepository")
 */
class Autority
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
     * @ORM\Column(name="firstname", type="string", length=50)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="filiation", type="string", length=50)
     */
    private $filiation;


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
     * Set firstname
     *
     * @param string $firstname
     * @return Autority
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Autority
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set filiation
     *
     * @param string $filiation
     * @return Autority
     */
    public function setFiliation($filiation)
    {
        $this->filiation = $filiation;

        return $this;
    }

    /**
     * Get filiation
     *
     * @return string 
     */
    public function getFiliation()
    {
        return $this->filiation;
    }
}
