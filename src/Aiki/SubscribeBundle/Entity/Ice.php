<?php

namespace Aiki\SubscribeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ice
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Aiki\SubscribeBundle\Entity\IceRepository")
 */
class Ice
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="filiation", type="string", length=50, nullable=true)
     */
    private $filiation;
    
    /**
     * @ORM\OneToOne(targetEntity="Aiki\SubscribeBundle\Entity\Tel", cascade={"persist"})
     */
    private $tel;


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
     * Set name
     *
     * @param string $name
     * @return Ice
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
     * Set firstname
     *
     * @param string $firstname
     * @return Ice
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
     * Set filiation
     *
     * @param string $filiation
     * @return Ice
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

    /**
     * Set tel
     *
     * @param \Aiki\SubscribeBundle\Entity\Tel $tel
     * @return Ice
     */
    public function setTel(\Aiki\SubscribeBundle\Entity\Tel $tel = null)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return \Aiki\SubscribeBundle\Entity\Tel 
     */
    public function getTel()
    {
        return $this->tel;
    }
}
