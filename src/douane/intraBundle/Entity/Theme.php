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


class Theme extends Board
{
    /**
     * @ORM\OneToMany(targetEntity="Formation", mappedBy="Theme")
     */
    

    

    
    
}