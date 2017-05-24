<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\ManyToMany (targetEntity="Wilder", mappedBy="wilders")
     */
    private $technologies;


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
     * Add technology
     *
     * @param \BookBundle\Entity\Wilder $technology
     *
     * @return Technology
     */
    public function addTechnology(\BookBundle\Entity\Wilder $technology)
    {
        $this->technologies[] = $technology;

        return $this;
    }

    /**
     * Remove technology
     *
     * @param \BookBundle\Entity\Wilder $technology
     */
    public function removeTechnology(\BookBundle\Entity\Wilder $technology)
    {
        $this->technologies->removeElement($technology);
    }

    /**
     * Get technologies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTechnologies()
    {
        return $this->technologies;
    }
}
