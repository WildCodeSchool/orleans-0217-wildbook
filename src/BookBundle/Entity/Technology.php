<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Technology
 *
 * @ORM\Table(name="technology")
 * @ORM\Entity(repositoryClass="BookBundle\Repository\TechnologyRepository")
 */
class Technology
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
     * @Assert\Length(
     *      min = 2,
     *      max = 45,
     *      minMessage = "le champ technologie doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "le champ technologie ne doit pas contenir plus de {{ limit }} caractères"
     *      )
     *
     * @ORM\Column(name="technology", type="string", length=45)
     */
    private $technology;

    /**
     * @var
     * @ORM\ManyToMany (targetEntity="Project", mappedBy="technologies")
     */
    private $projects;

    /**
     * @var
     * @ORM\ManyToMany (targetEntity="Wilder", mappedBy="technologies")
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
     * @return mixed
     */
    public function getWilders()
    {
        return $this->wilders;
    }

    /**
     * @param mixed $wilders
     */
    public function setWilders($wilders)
    {
        $this->wilders = $wilders;
    }

    /**
     * Set technology
     *
     * @param string $technology
     *
     * @return technology
     */
    public function setTechnology($technology)
    {
        $this->technology = $technology;

        return $this;
    }

    /**
     * Get technology
     *
     * @return string
     */
    public function getTechnology()
    {
        return $this->technology;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
        $this->wilders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add project
     *
     * @param \BookBundle\Entity\Project $project
     *
     * @return Technology
     */
    public function addProject(\BookBundle\Entity\Project $project)
    {
        $this->projects[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \BookBundle\Entity\Project $project
     */
    public function removeProject(\BookBundle\Entity\Project $project)
    {
        $this->projects->removeElement($project);
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjects()
    {
        return $this->projects;
    }



    /**
     * Add wilder
     *
     * @param \BookBundle\Entity\Wilder $wilder
     *
     * @return Technology
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
}
