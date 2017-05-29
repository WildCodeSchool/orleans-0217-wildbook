<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Availability
 *
 * @ORM\Table(name="availability")
 * @ORM\Entity(repositoryClass="BookBundle\Repository\AvailabilityRepository")
 */
class Availability
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
     *
     * @ORM\Column(name="label", type="string", length=45)
     */
    private $label;

    /**
     * @var
     * @ORM\OneToMany (targetEntity="Wilder", mappedBy="availability")
     */
    private $wilders;


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
     * Set label
     *
     * @param string $label
     *
     * @return availability
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->wilders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add wilder
     *
     * @param \BookBundle\Entity\Wilder $wilder
     *
     * @return Availability
     */
    public function addWilder(\BookBundle\Entity\Wilder $wilder)
    {
        $this->wilders[] = $wilder;

        return $this;
    }

    /**
     * Remove wilder
     *
     * @param \BookBundle\Entity\Wilder $wilder
     */
    public function removeWilder(\BookBundle\Entity\Wilder $wilder)
    {
        $this->wilders->removeElement($wilder);
    }

    /**
     * Get wilders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWilders()
    {
        return $this->wilders;
    }
}
