<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="BookBundle\Repository\CategoryRepository")
 */
class Category
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
     *      minMessage = "le champ label doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "le champ label ne doit pas contenir plus de {{ limit }} caractères"
     *      )
     *
     * @ORM\Column(name="label", type="string", length=45)
     */
    private $label;

    /**
     * @var
     * @ORM\OneToMany (targetEntity="Project", mappedBy="category")
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
     * Set label
     *
     * @param string $label
     *
     * @return category
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
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add project
     *
     * @param \BookBundle\Entity\Project $project
     *
     * @return Category
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
