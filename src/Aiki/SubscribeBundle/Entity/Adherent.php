<?php

namespace Aiki\SubscribeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adherent
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Aiki\SubscribeBundle\Entity\AdherentRepository")
 */
class Adherent
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
     * @var integer
     *
     * @ORM\Column(name="number", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $number;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=50)
     */
    private $grade;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="ischild", type="boolean")
     */
    private $ischild;
    
    /**
     * @ORM\OneToOne(targetEntity="Aiki\SubscribeBundle\Entity\Persona", cascade={"persist"})
     */
    private $persona;

    /**
     * @ORM\OneToOne(targetEntity="Aiki\SubscribeBundle\Entity\Tutor", cascade={"persist"})
     */
    private $tutor;
    
    /**
     * @ORM\OneToOne(targetEntity="Aiki\SubscribeBundle\Entity\Adress", cascade={"persist"})
     */
    private $adress;
    
    /**
     * @ORM\OneToOne(targetEntity="Aiki\SubscribeBundle\Entity\Mail", cascade={"persist"})
     */
    private $mail;
    
    /**
     * @ORM\OneToOne(targetEntity="Aiki\SubscribeBundle\Entity\Tel", cascade={"persist"})
     */
    private $tel;
    
    /**
     * @ORM\OneToOne(targetEntity="Aiki\SubscribeBundle\Entity\School", cascade={"persist"})
     */
    private $school;
    
    /**
     * @ORM\OneToOne(targetEntity="Aiki\SubscribeBundle\Entity\Ice", cascade={"persist"})
     */
    private $ice;
    
    /**
     * @ORM\OneToOne(targetEntity="Aiki\SubscribeBundle\Entity\Approval", cascade={"persist"})
     */
    private $approval;
    
    public function __construct()
    {
        $this->date = new \DateTime();
        $this->grade = "mu kyu";
    }


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
     * Set number deleted
     *
     * @param integer $number
     * @return Adherent
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

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Adherent
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return Adherent
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set persona
     *
     * @param \Aiki\SubscribeBundle\Entity\Persona $persona
     * @return Adherent
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
     * Set ischild
     *
     * @param boolean $ischild
     * @return Adherent
     */
    public function setIschild($ischild)
    {
        $this->ischild = $ischild;

        return $this;
    }

    /**
     * Get ischild
     *
     * @return boolean 
     */
    public function getIschild()
    {
        return $this->ischild;
    }

    /**
     * Set mail
     *
     * @param \Aiki\SubscribeBundle\Entity\Mail $mail
     * @return Adherent
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
     * @return Adherent
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

    /**
     * Set adress
     *
     * @param \Aiki\SubscribeBundle\Entity\Adress $adress
     * @return Adherent
     */
    public function setAdress(\Aiki\SubscribeBundle\Entity\Adress $adress = null)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return \Aiki\SubscribeBundle\Entity\Adress 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set tutor
     *
     * @param \Aiki\SubscribeBundle\Entity\Tutor $tutor
     * @return Adherent
     */
    public function setTutor(\Aiki\SubscribeBundle\Entity\Tutor $tutor = null)
    {
        $this->tutor = $tutor;

        return $this;
    }

    /**
     * Get tutor
     *
     * @return \Aiki\SubscribeBundle\Entity\Tutor 
     */
    public function getTutor()
    {
        return $this->tutor;
    }

    /**
     * Set school
     *
     * @param \Aiki\SubscribeBundle\Entity\School $school
     * @return Adherent
     */
    public function setSchool(\Aiki\SubscribeBundle\Entity\School $school = null)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return \Aiki\SubscribeBundle\Entity\School 
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set ice
     *
     * @param \Aiki\SubscribeBundle\Entity\Ice $ice
     * @return Adherent
     */
    public function setIce(\Aiki\SubscribeBundle\Entity\Ice $ice = null)
    {
        $this->ice = $ice;

        return $this;
    }

    /**
     * Get ice
     *
     * @return \Aiki\SubscribeBundle\Entity\Ice 
     */
    public function getIce()
    {
        return $this->ice;
    }

    /**
     * Set approval
     *
     * @param \Aiki\SubscribeBundle\Entity\Approval $approval
     * @return Adherent
     */
    public function setApproval(\Aiki\SubscribeBundle\Entity\Approval $approval = null)
    {
        $this->approval = $approval;

        return $this;
    }

    /**
     * Get approval
     *
     * @return \Aiki\SubscribeBundle\Entity\Approval 
     */
    public function getApproval()
    {
        return $this->approval;
    }
}
