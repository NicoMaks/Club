<?php

namespace Aiki\SubscribeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adress
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Aiki\SubscribeBundle\Entity\AdressRepository")
 */
class Adress
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
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="suffixnumber", type="string", length=8, nullable=true)
     */
    private $suffixnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="appt", type="string", length=30, nullable=true)
     */
    private $appt;

    /**
     * @var integer
     *
     * @ORM\Column(name="postcode", type="integer")
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255, nullable=true)
     */
    private $region;


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
     * Set street
     *
     * @param string $street
     * @return Adress
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Adress
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
     * Set suffixnumber
     *
     * @param string $suffixnumber
     * @return Adress
     */
    public function setSuffixnumber($suffixnumber)
    {
        $this->suffixnumber = $suffixnumber;

        return $this;
    }

    /**
     * Get suffixnumber
     *
     * @return string 
     */
    public function getSuffixnumber()
    {
        return $this->suffixnumber;
    }

    /**
     * Set appt
     *
     * @param string $appt
     * @return Adress
     */
    public function setAppt($appt)
    {
        $this->appt = $appt;

        return $this;
    }

    /**
     * Get appt
     *
     * @return string 
     */
    public function getAppt()
    {
        return $this->appt;
    }

    /**
     * Set postcode
     *
     * @param integer $postcode
     * @return Adress
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return integer 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Adress
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Adress
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }
}
