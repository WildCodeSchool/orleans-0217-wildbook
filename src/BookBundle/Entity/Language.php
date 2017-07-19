<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Language
 *
 * @ORM\Table(name="language")
 * @ORM\Entity(repositoryClass="BookBundle\Repository\LanguageRepository")
 */
class Language
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
     *      min = 1,
     *      max = 30,
     *      minMessage = "le champ langage doit contenir au moins 1 caractère",
     *      maxMessage = "le champ langage ne doit pas contenir plus de {{ limit }} caractères"
     *      )
     *
     * @ORM\Column(name="language", type="string", length=30)
     */
    private $language;

    /**
     * @var
     * @ORM\ManyToMany (targetEntity="Project", mappedBy="languages")
     */
    private $projects;

    /**
     * @var
     * @ORM\ManyToMany (targetEntity="Wilder", mappedBy="languages")
     */
    private $wilders;

    /**
     * @var
     * @ORM\ManyToMany (targetEntity="Promotion", mappedBy="languages")
     */
    private $promotions;

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
     * Set language
     *
     * @param string $language
     *
     * @return language
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
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
     * @return Language
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
     * @return Language
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

    /**
     * Add promotion
     *
     * @param \BookBundle\Entity\Promotion $promotion
     *
     * @return Language
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
}
