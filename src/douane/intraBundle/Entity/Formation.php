<?php 
namespace douane\intraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Common\Collections\ArrayCollection;
use CCDNForum\ForumBundle\Entity\Board; 

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
    private $lieu_formation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $action_formation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $animateur_formation;

    /**
     * @ORM\ManyToOne(targetEntity="CCDNForum\ForumBundle\Entity\Board", inversedBy="formations")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    protected $theme;

    public function setIdFormation($id_formation) {
     $this->id_formation = $id_formation;
    }

    public function getIdFormation() {
      return $this->id_formation;
    }

    public function setActionFormation($action_formation) {
     $this->action_formation = $action_formation;
    }

    public function getActionFormation() {
      return $this->action_formation;
    }

    public function setLieuFormation($lieu_formation) {
     $this->lieu_formation = $lieu_formation;
    }

    public function getLieuFormation() {
      return $this->lieu_formation;
    }

    public function setAnimateurFormation($animateur_formation) {
     $this->animateur_formation = $animateur_formation;
    }

    public function getAnimateurFormation() {
      return $this->animateur_formation;
    }

    public function setTheme($theme) {
     $this->theme = $theme;
    }

    public function getTheme() {
      return $this->theme;
    }

    
    
}