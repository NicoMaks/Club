<?php

namespace Aiki\SubscribeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Approval
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Aiki\SubscribeBundle\Entity\ApprovalRepository")
 */
class Approval
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
     * @var boolean
     *
     * @ORM\Column(name="newsletter", type="boolean")
     */
    private $newsletter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="image", type="boolean")
     */
    private $image;


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
     * Set newsletter
     *
     * @param boolean $newsletter
     * @return Approval
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean 
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set image
     *
     * @param boolean $image
     * @return Approval
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return boolean 
     */
    public function getImage()
    {
        return $this->image;
    }
}
