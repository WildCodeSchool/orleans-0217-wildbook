<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HomeWilder
 *
 * @ORM\Table(name="home_wilder")
 * @ORM\Entity(repositoryClass="BookBundle\Repository\HomeWilderRepository")
 */
class HomeWilder
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var
     * @ORM\ManyToOne (targetEntity="Wilder",inversedBy="homewilder")
     */
    private $wilders;


    /**
     * @return mixed
     */
    public function getWilder()
    {
        return $this->wilder;
    }

    /**
     * @param mixed $wilder
     * @return HomeWilder
     */
    public function setWilder($wilder)
    {
        $this->wilder = $wilder;
        return $this;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return HomeWilder
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set wilders
     *
     * @param \BookBundle\Entity\Wilder $wilders
     *
     * @return HomeWilder
     */
    public function setWilders(\BookBundle\Entity\Wilder $wilders = null)
    {
        $this->wilders = $wilders;

        return $this;
    }

    /**
     * Get wilders
     *
     * @return \BookBundle\Entity\Wilder
     */
    public function getWilders()
    {
        return $this->wilders;
    }
}
