<?php 
namespace douane\intraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */


class Formation
{
    /**
     * @ORM\OneToMany(targetEntity="Document", mappedBy="formation")
     */
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    public $id_formation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    public $nom_formation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $lieu_formation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $action_formation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $animateur_formation;

    /**
     * @ORM\ManyToOne(targetEntity="Theme", inversedBy="formations")
     * @ORM\JoinColumn(name="theme_id", referencedColumnName="id")
     */
    protected $theme;

    
    
}