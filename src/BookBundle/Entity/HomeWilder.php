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
     * @ORM\OneToOne (targetEntity="Wilder", mappedBy="homeWilder" , cascade={"persist","remove"})
     */
    private $wilder;


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
     * Set wilder
     *
     * @param \BookBundle\Entity\Wilder $wilder
     *
     * @return HomeWilder
     */
    public function setWilder(\BookBundle\Entity\Wilder $wilder = null)
    {
        $this->wilder = $wilder;

        return $this;
    }

    /**
     * Get wilder
     *
     * @return \BookBundle\Entity\Wilder
     */
    public function getWilder()
    {
        return $this->wilder;
    }
}
