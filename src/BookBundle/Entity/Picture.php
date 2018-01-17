<?php

namespace BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Picture
 *
 * @ORM\Table(name="picture")
 * @ORM\Entity(repositoryClass="BookBundle\Repository\PictureRepository")
 */
class Picture
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
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     * @Assert\Image( maxSize = "1024k",
     *     mimeTypes={"image/jpg","image/jpeg","image/png"},
     *     minHeight = 400,
     * )
     */
    private $path;


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
     * Set path
     *
     * @param string $path
     *
     * @return Picture
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
     * @var bool
     * @ORM\Column(name="isPrincipal", type="boolean")
     */
    private $isPrincipal;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="pictures", cascade = {"persist"})
     */
    private $project;

    /**
     * Set isPrincipal
     *
     * @param boolean $isPrincipal
     *
     * @return Picture
     */
    public function setIsPrincipal($isPrincipal)
    {
        $this->isPrincipal = $isPrincipal;

        return $this;
    }

    /**
     * Get isPrincipal
     *
     * @return boolean
     */
    public function getIsPrincipal()
    {
        return $this->isPrincipal;
    }

    /**
     * Set project
     *
     * @param \BookBundle\Entity\Project $project
     *
     * @return Picture
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
}
