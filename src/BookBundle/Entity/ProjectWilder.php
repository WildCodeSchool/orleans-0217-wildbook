<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectWilder
 *
 * @ORM\Table(name="project_wilder")
 * @ORM\Entity(repositoryClass="BookBundle\Repository\ProjectWilderRepository")
 */
class ProjectWilder
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
     * @var bool
     *
     * @ORM\Column(name="visibility", type="boolean")
     */
    private $visibility;

    /**
     * @var
     * @ORM\ManyToOne (targetEntity="Project", inversedBy="projectWilders" , cascade={"persist", "merge"})
     */
    private $project;


    /**
     * @var
     * @ORM\ManyToOne (targetEntity="Wilder", inversedBy="projectWilders", cascade={"persist", "merge"})
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
     * Set visibility
     *
     * @param boolean $visibility
     *
     * @return projectWilder
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return bool
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set project
     *
     * @param \BookBundle\Entity\Project $project
     *
     * @return ProjectWilder
     */
    public function setProject(\BookBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \BookBundle\Entity\Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set wilder
     *
     * @param \BookBundle\Entity\Wilder $wilder
     *
     * @return ProjectWilder
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
