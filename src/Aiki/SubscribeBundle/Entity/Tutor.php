<?php

namespace Aiki\SubscribeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tutor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Aiki\SubscribeBundle\Entity\TutorRepository")
 */
class Tutor
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
     * @ORM\Column(name="Affiliation", type="string", length=50)
     */
    private $affiliation;
    
    /**
     * @ORM\OneToOne(targetEntity="Aiki\SubscribeBundle\Entity\Persona", cascade={"persist"})
     */
    private $persona;
    
    /**
     * @ORM\OneToOne(targetEntity="Aiki\SubscribeBundle\Entity\Mail", cascade={"persist"})
     */
    private $mail;

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
     * Set affiliation
     *
     * @param string $affiliation
     * @return Tutor
     */
    public function setAffiliation($affiliation)
    {
        $this->affiliation = $affiliation;

        return $this;
    }

    /**
     * Get affiliation
     *
     * @return string 
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * Set persona
     *
     * @param \Aiki\SubscribeBundle\Entity\Persona $persona
     * @return Tutor
     */
    public function setPersona(\Aiki\SubscribeBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \Aiki\SubscribeBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set mail
     *
     * @param \Aiki\SubscribeBundle\Entity\Mail $mail
     * @return Tutor
     */
    public function setMail(\Aiki\SubscribeBundle\Entity\Mail $mail = null)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return \Aiki\SubscribeBundle\Entity\Mail 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set tel
     *
     * @param \Aiki\SubscribeBundle\Entity\Tel $tel
     * @return Tutor
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
