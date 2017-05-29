<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity(repositoryClass="BookBundle\Repository\PromotionRepository")
 */
class Promotion
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
     * @ORM\Column(name="promotion", type="string", length=45)
     */
    private $promotion;

    /**
     * @var
     * @ORM\ManyToMany (targetEntity="Language", inversedBy="promotions")
     */
    private $languages;

    /**
     * @var
     * @ORM\OneToMany (targetEntity="Wilder", mappedBy="promotion")
     */
    private $wilders;

    /**
     * @var
     * @ORM\ManyToOne (targetEntity="School", inversedBy="promotions")
     */
    private $school;


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
     * Set promotion
     *
     * @param string $promotion
     *
     * @return promotion
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return string
     */
    public function getPromotion()
    {
        return $this->promotion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->languages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add language
     *
     * @param \BookBundle\Entity\Language $language
     *
     * @return Promotion
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
     * Add wilder
     *
     * @param \BookBundle\Entity\Wilder $wilder
     *
     * @return Promotion
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
     * Set school
     *
     * @param \BookBundle\Entity\School $school
     *
     * @return Promotion
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
}
