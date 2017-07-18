<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Annotations\AnnotationException;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Wilder
 *
 * @ORM\Table(name="wilder")
 * @ORM\Entity(repositoryClass="BookBundle\Repository\WilderRepository")
 */
class Wilder
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
     * @var \DateTime
     * @Assert\Date()
     *
     * @ORM\Column(name="birthDate", type="date")
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=100, nullable=true)
     */
    private $location;

    /**
     * @var int
     * @Assert\Length(max="5", min="5", minMessage="Code postal invalide", maxMessage="Code postal invalide")
     * @Assert\Regex("/[0-9]{2}[0-9]{3}/", message="Code postal invalide")
     *
     * @ORM\Column(name="postalCode", type="integer", nullable=true)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=60)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="skill", type="text", nullable=true)
     */
    private $skill;

    /**
     * @var bool
     *
     * @ORM\Column(name="freelanceAvailability", type="boolean")
     */
    private $freelanceAvailability;

    /**
     * @var string
     * @Assert\Length(
     *      min = 0,
     *      max = 100,
     *      minMessage = "le champ modjo doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "le champ modjo ne doit pas contenir plus de {{ limit }} caractères"
     *      )
     *
     * @ORM\Column(name="modjo", type="string", length=100)
     */
    private $modjo;

    /**
     * @var string
     *
     * @ORM\Column(name="biography", type="text", nullable=true)
     */
    private $biography;

    /**
     * @var string
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     *
     * @ORM\Column(name="contactEmail", type="string", length=100, nullable=true)
     */
    private $contactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="profilPicture", type="string", length=255)
     *
     * @Assert\Image()
     *
     */
    private $profilPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", length=255, nullable=true)
     *
     * @Assert\File(maxSize = "1024k",
     *     mimeTypes = {"cv/pdf"},
     *     mimeTypesMessage = "Merci de charger un fichier PDF valide")
     */
    private $cv;

    /**
     * @var string
     * @Assert\Url(
     *     message = "The url '{{ value }}' is not a valid url",
     * )
     *
     * @ORM\Column(name="website", type="text", nullable=true)
     */
    private $website;

    /**
     * @var string
     * @Assert\Url(
     *     message = "The url '{{ value }}' is not a valid url",
     * )
     *
     * @ORM\Column(name="github", type="string", length=255, nullable=true)
     */
    private $github;

    /**
     * @var string
     * @Assert\Url(
     *     message = "The url '{{ value }}' is not a valid url",
     * )
     *
     * @ORM\Column(name="linkedin", type="string", length=255, nullable=true)
     */
    private $linkedin;

    /**
     * @var string
     * @Assert\Url(
     *     message = "The url '{{ value }}' is not a valid url",
     * )
     *
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     * @Assert\Url(
     *     message = "The url '{{ value }}' is not a valid url",
     * )
     *
     * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * @var bool
     *
     * @ORM\Column(name="userActivation", type="boolean")
     */
    private $userActivation;

    /**
     * @var bool
     *
     * @ORM\Column(name="managerActivation", type="boolean")
     */
    private $managerActivation;

    /**
     * @var string
     *
     * @ORM\Column(name="codewarsUsername", type="string", length=45, nullable=true)
     */
    private $codewarsUsername;

    /**
     * @var
     * @ORM\ManyToMany (targetEntity="Language", inversedBy="wilders")
     */
    private $languages;

    /**
     * @var
     * @ORM\ManyToMany (targetEntity="Technology", inversedBy="wilders")
     */
    private $technologies;

    /**
     * @var
     * @ORM\OneToMany (targetEntity="ProjectWilder", mappedBy="wilder", cascade={"persist", "remove"})
     */
    private $projectWilders;

    /**
     * @var
     * @ORM\ManyToOne (targetEntity="Availability", inversedBy="wilders")
     */
    private $availability;

    /**
     * @var
     * @ORM\ManyToOne (targetEntity="Promotion", inversedBy="wilders" , cascade={"persist", "merge"})
     */
    private $promotion;

    /**
     * @var
     * @ORM\OneToOne (targetEntity="User", inversedBy="wilder")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=50)
     */
    private $lastname;

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
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return wilder
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return wilder
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postalCode
     *
     * @param integer $postalCode
     *
     * @return wilder
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return int
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return wilder
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set skill
     *
     * @param string $skill
     *
     * @return wilder
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return string
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Set freelanceAvailability
     *
     * @param boolean $freelanceAvailability
     *
     * @return wilder
     */
    public function setFreelanceAvailability($freelanceAvailability)
    {
        $this->freelanceAvailability = $freelanceAvailability;

        return $this;
    }

    /**
     * Get freelanceAvailability
     *
     * @return bool
     */
    public function getFreelanceAvailability()
    {
        return $this->freelanceAvailability;
    }

    /**
     * Set modjo
     *
     * @param string $modjo
     *
     * @return wilder
     */
    public function setModjo($modjo)
    {
        $this->modjo = $modjo;

        return $this;
    }

    /**
     * Get modjo
     *
     * @return string
     */
    public function getModjo()
    {
        return $this->modjo;
    }

    /**
     * Set biography
     *
     * @param string $biography
     *
     * @return wilder
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;

        return $this;
    }

    /**
     * Get biography
     *
     * @return string
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     *
     * @return wilder
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set profilPicture
     *
     * @param string $profilPicture
     *
     * @return wilder
     */
    public function setProfilPicture($profilPicture)
    {
        $this->profilPicture = $profilPicture;

        return $this;
    }

    /**
     * Get profilPicture
     *
     * @return string
     */
    public function getProfilPicture()
    {
        return $this->profilPicture;
    }

    /**
     * Set cv
     *
     * @param string $cv
     *
     * @return wilder
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return string
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return wilder
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set github
     *
     * @param string $github
     *
     * @return wilder
     */
    public function setGithub($github)
    {
        $this->github = $github;

        return $this;
    }

    /**
     * Get github
     *
     * @return string
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     *
     * @return wilder
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return wilder
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return wilder
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set userActivation
     *
     * @param boolean $userActivation
     *
     * @return wilder
     */
    public function setUserActivation($userActivation)
    {
        $this->userActivation = $userActivation;

        return $this;
    }

    /**
     * Get userActivation
     *
     * @return bool
     */
    public function getUserActivation()
    {
        return $this->userActivation;
    }

    /**
     * Set managerActivation
     *
     * @param boolean $managerActivation
     *
     * @return wilder
     */
    public function setManagerActivation($managerActivation)
    {
        $this->managerActivation = $managerActivation;

        return $this;
    }

    /**
     * Get managerActivation
     *
     * @return bool
     */
    public function getManagerActivation()
    {
        return $this->managerActivation;
    }

    /**
     * Set codewarsUsername
     *
     * @param string $codewarsUsername
     *
     * @return wilder
     */
    public function setCodewarsUsername($codewarsUsername)
    {
        $this->codewarsUsername = $codewarsUsername;

        return $this;
    }

    /**
     * Get codewarsUsername
     *
     * @return string
     */
    public function getCodewarsUsername()
    {
        return $this->codewarsUsername;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->languages = new ArrayCollection();
        $this->technologies = new ArrayCollection();
    }

    /**
     * Add language
     *
     * @param \BookBundle\Entity\Language $language
     *
     * @return Wilder
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
     * Add technology
     *
     * @param \BookBundle\Entity\Technology $technology
     *
     * @return Wilder
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
     * Add projectWilder
     *
     * @param \BookBundle\Entity\ProjectWilder $projectWilder
     *
     * @return Wilder
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
     * Set availability
     *
     * @param \BookBundle\Entity\Availability $availability
     *
     * @return Wilder
     */
    public function setAvailability(\BookBundle\Entity\Availability $availability = null)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get availability
     *
     * @return \BookBundle\Entity\Availability
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set promotion
     *
     * @param \BookBundle\Entity\Promotion $promotion
     *
     * @return Wilder
     */
    public function setPromotion(\BookBundle\Entity\Promotion $promotion = null)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return \BookBundle\Entity\Promotion
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Set user
     *
     * @param \BookBundle\Entity\User $user
     *
     * @return Wilder
     */
    public function setUser(\BookBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BookBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $languages
     */
    public function setLanguages( $languages)
    {
        $this->languages = $languages;
    }

    /**
     * @param mixed $technologies
     */
    public function setTechnologies($technologies)
    {
        $this->technologies = $technologies;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Wilder
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Wilder
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Wilder
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    public function getFullName()
    {
        return $this->getFirstname().' '.$this->getLastname();
    }

}
