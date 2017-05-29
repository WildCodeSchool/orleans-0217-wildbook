<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CampusManager
 *
 * @ORM\Table(name="campus_manager")
 * @ORM\Entity(repositoryClass="BookBundle\Repository\CampusManagerRepository")
 */
class CampusManager
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
     * @var
     * @ORM\ManyToOne (targetEntity="School", inversedBy="campusManagers")
     */
    private $school;

    /**
     * @var
     * @ORM\OneToOne (targetEntity="User", mappedBy="campusManager")
     */
    private $user;

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
     * @param \BookBundle\Entity\School $school
     *
     * @return CampusManager
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
     * Set user
     *
     * @param \BookBundle\Entity\User $user
     *
     * @return CampusManager
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
}
