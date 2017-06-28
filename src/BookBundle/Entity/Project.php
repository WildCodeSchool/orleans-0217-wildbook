<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="BookBundle\Repository\ProjectRepository")
 */
class Project
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
     * @ORM\Column(name="title", type="string", length=60)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="customer", type="string", length=45, nullable=true)
     */
    private $customer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=255, nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="projects", cascade={"persist", "merge"})
     */
    private $tags;

    /**
     * @var
     * @ORM\ManyToOne (targetEntity="Category", inversedBy="projects")
     */
    private $category;

    /**
     * @var
     * @ORM\ManyToMany (targetEntity="Language", inversedBy="projects")
     */
    private $languages;

    /**
     * @var
     * @ORM\ManyToMany (targetEntity="Technology", inversedBy="projects")
     */
    private $technologies;

    /**
     * @var
     * @ORM\OneToMany (targetEntity="ProjectWilder", mappedBy="project")
     */
    private $projectWilders;

    /**
     * @var
     * @ORM\ManyToOne (targetEntity="School", inversedBy="projects")
     */
    private $school;

    /**
     * @var boolean
     */
    private $homeProject;

    /**
     * @var string
     */
    private $homeTextProject;

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
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
     * Set title
     *
     * @param string $title
     *
     * @return project
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return project
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set customer
     *
     * @param string $customer
     *
     * @return project
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return project
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return project
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return project
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return project
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
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->languages = new ArrayCollection();
        $this->technologies = new ArrayCollection();
        $this->projectWilders = new ArrayCollection();
    }

    /**
     * Add tag
     *
     * @param \BookBundle\Entity\Tag $tag
     *
     * @return Project
     */
    public function addTag(\BookBundle\Entity\Tag $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \BookBundle\Entity\Tag $tag
     */
    public function removeTag(\BookBundle\Entity\Tag $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Set category
     *
     * @param \BookBundle\Entity\Category $category
     *
     * @return Project
     */
    public function setCategory(\BookBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \BookBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add language
     *
     * @param \BookBundle\Entity\Language $language
     *
     * @return Project
     */
    public function addLanguage(\BookBundle\Entity\Language $language)
    {
        $this->languages[] = $language;

        return $this;
    }

    /**
     * Remove language
     *
     * @param \BookBundle\Entity\Language $language
     */
    public function removeLanguage(\BookBundle\Entity\Language $language)
    {
        $this->languages->removeElement($language);
    }

    /**
     * Get languages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @param mixed $languages
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;
    }

    /**
     * Add technology
     *
     * @param \BookBundle\Entity\Technology $technology
     *
     * @return Project
     */
    public function addTechnology(\BookBundle\Entity\Technology $technology)
    {
        $this->technologies[] = $technology;

        return $this;
    }

    /**
     * Remove technology
     *
     * @param \BookBundle\Entity\Technology $technology
     */
    public function removeTechnology(\BookBundle\Entity\Technology $technology)
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

    /**
     * @param mixed $technologies
     */
    public function setTechnologies($technologies)
    {
        $this->technologies = $technologies;
    }

    /**
     * Add projectWilder
     *
     * @param \BookBundle\Entity\ProjectWilder $projectWilder
     *
     * @return Project
     */
    public function addProjectWilder(\BookBundle\Entity\ProjectWilder $projectWilder)
    {
        $this->projectWilders[] = $projectWilder;

        return $this;
    }

    /**
     * Remove projectWilder
     *
     * @param \BookBundle\Entity\ProjectWilder $projectWilder
     */
    public function removeProjectWilder(\BookBundle\Entity\ProjectWilder $projectWilder)
    {
        $this->projectWilders->removeElement($projectWilder);
    }

    /**
     * Get projectWilders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjectWilders()
    {
        return $this->projectWilders;
    }

    /**
     * Set school
     *
     * @param \BookBundle\Entity\School $school
     *
     * @return Project
     */
    public function setSchool(\BookBundle\Entity\School $school = null)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return \BookBundle\Entity\School
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="principal_picture", type="string", length=255, nullable=true)
     *
     * @Assert\Image()
     */
    private $principalPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="first_picture", type="string", length=255, nullable=true)
     *
     * @Assert\Image()
     */
    private $firstPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="second_picture", type="string", length=255, nullable=true)
     *
     * @Assert\Image()
     */
    private $secondPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="third_picture", type="string", length=255, nullable=true)
     *
     * @Assert\Image()
     */
    private $thirdPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="fourth_picture", type="string", length=255, nullable=true)
     *
     * @Assert\Image()
     */
    private $fourthPicture;

    /**
     * Set principalPicture
     *
     * @param string $principalPicture
     *
     * @return Project
     */
    public function setPrincipalPicture($principalPicture)
    {
        $this->principalPicture = $principalPicture;

        return $this;
    }

    /**
     * Get principalPicture
     *
     * @return string
     */
    public function getPrincipalPicture()
    {
        return $this->principalPicture;
    }

    /**
     * Set firstPicture
     *
     * @param string $firstPicture
     *
     * @return Project
     */
    public function setFirstPicture($firstPicture)
    {
        $this->firstPicture = $firstPicture;

        return $this;
    }

    /**
     * Get firstPicture
     *
     * @return string
     */
    public function getFirstPicture()
    {
        return $this->firstPicture;
    }

    /**
     * Set secondPicture
     *
     * @param string $secondPicture
     *
     * @return Project
     */
    public function setSecondPicture($secondPicture)
    {
        $this->secondPicture = $secondPicture;

        return $this;
    }

    /**
     * Get secondPicture
     *
     * @return string
     */
    public function getSecondPicture()
    {
        return $this->secondPicture;
    }

    /**
     * Set thirdPicture
     *
     * @param string $thirdPicture
     *
     * @return Project
     */
    public function setThirdPicture($thirdPicture)
    {
        $this->thirdPicture = $thirdPicture;

        return $this;
    }

    /**
     * Get thirdPicture
     *
     * @return string
     */
    public function getThirdPicture()
    {
        return $this->thirdPicture;
    }

    /**
     * Set fourthPicture
     *
     * @param string $fourthPicture
     *
     * @return Project
     */
    public function setFourthPicture($fourthPicture)
    {
        $this->fourthPicture = $fourthPicture;

        return $this;
    }

    /**
     * Get fourthPicture
     *
     * @return string
     */
    public function getFourthPicture()
    {
        return $this->fourthPicture;
    }
}
