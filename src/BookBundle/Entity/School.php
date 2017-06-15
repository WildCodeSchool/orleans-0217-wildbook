<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * School
 *
 * @ORM\Table(name="school")
 * @ORM\Entity(repositoryClass="BookBundle\Repository\SchoolRepository")
 */
class School
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
     * @ORM\Column(name="school", type="string", length=45)
     */
    private $school;

    /**
     * @var
     * @ORM\OneToMany (targetEntity="Promotion", mappedBy="school")
     */
    private $promotions;

    /**
     * @var
     * @ORM\OneToMany (targetEntity="CampusManager", mappedBy="school")
     */
    private $campusManagers;

    /**
     * @var
     * @ORM\OneToMany (targetEntity="Project", mappedBy="school")
     */
    private $projects;


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
     * Set school
     *
     * @param string $school
     *
     * @return school
     */
    public function setSchool($school)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return string
     */
    public function getSchool()
    {
        return $this->school;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->promotions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add promotion
     *
     * @param \BookBundle\Entity\Promotion $promotion
     *
     * @return School
     */
    public function addPromotion(\BookBundle\Entity\Promotion $promotion)
    {
        $this->promotions[] = $promotion;

        return $this;
    }

    /**
     * Remove promotion
     *
     * @param \BookBundle\Entity\Promotion $promotion
     */
    public function removePromotion(\BookBundle\Entity\Promotion $promotion)
    {
        $this->promotions->removeElement($promotion);
    }

    /**
     * Get promotions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * Add campusManager
     *
     * @param \BookBundle\Entity\CampusManager $campusManager
     *
     * @return School
     */
    public function addCampusManager(\BookBundle\Entity\CampusManager $campusManager)
    {
        $this->campusManagers[] = $campusManager;

        return $this;
    }

    /**
     * Remove campusManager
     *
     * @param \BookBundle\Entity\CampusManager $campusManager
     */
    public function removeCampusManager(\BookBundle\Entity\CampusManager $campusManager)
    {
        $this->campusManagers->removeElement($campusManager);
    }

    /**
     * Get campusManagers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCampusManagers()
    {
        return $this->campusManagers;
    }

    /**
     * Add project
     *
     * @param \BookBundle\Entity\Project $project
     *
     * @return School
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
}
