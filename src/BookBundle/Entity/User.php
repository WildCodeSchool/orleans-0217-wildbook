<?php
// src/BookBundle/Entity/User.php

namespace BookBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     * @ORM\OneToOne (targetEntity="CampusManager", mappedBy="user" , cascade={"persist", "merge"})
     */
    private $campusManager;

    /**
     * @var
     * @ORM\OneToOne (targetEntity="Wilder", mappedBy="user")
     */
    private $wilder;

    /**
     * @var string
     *
     * @ORM\Column(name="promotion", type="string", length=45)
     * @ORM\ManyToOne (targetEntity="Promotion", inversedBy="users" , cascade={"persist", "merge"})
     */
    private $promotion;

    /**
     * Get promotion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @param mixed $promotion
     * @return User
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }


    public function __construct()
    {
        parent::__construct();
        $this->promotion = new ArrayCollection();
    }

    /**
     * Add promotion
     *
     * @param \BookBundle\Entity\Promotion $promotion
     *
     * @return User
     */
    public function addPromotion(\BookBundle\Entity\Promotion $promotion)
    {
        $this->promotion[] = $promotion;

        return $this;
    }

    /**
     * Set campusManager
     *
     * @param \BookBundle\Entity\CampusManager $campusManager
     *
     * @return User
     */
    public function setCampusManager(\BookBundle\Entity\CampusManager $campusManager = null)
    {
        $this->campusManager = $campusManager;

        return $this;
    }

    /**
     * Get campusManager
     *
     * @return \BookBundle\Entity\CampusManager
     */
    public function getCampusManager()
    {
        return $this->campusManager;
    }

    /**
     * Set wilder
     *
     * @param \BookBundle\Entity\wilder $wilder
     *
     * @return User
     */
    public function setWilder(\BookBundle\Entity\Wilder $wilder = null)
    {
        $this->wilder = $wilder;

        return $this;
    }

    /**
     * Get wilder
     *
     * @return \BookBundle\Entity\wilder
     */
    public function getWilder()
    {
        return $this->wilder;
    }
}
