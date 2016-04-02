<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classement
 *
 * @ORM\Table("Classement")
 * @ORM\Entity(repositoryClass="Utilisateur\UtilisateurBundle\Repository\ClassementRepository")
 */
class Classement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_classement", type="string", length=255)
     */
    private $nomClassement;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage_classement", type="string", length=255)
     */
    private $pourcentageClassement;

    /**
     * @var string
     *
     * @ORM\Column(name="image_classement", type="string", length=255)
     */
    private $imageClassement;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomClassement
     *
     * @param string $nomClassement
     * @return Classement
     */
    public function setNomClassement($nomClassement)
    {
        $this->nomClassement = $nomClassement;
    
        return $this;
    }

    /**
     * Get nomClassement
     *
     * @return string 
     */
    public function getNomClassement()
    {
        return $this->nomClassement;
    }

    /**
     * Set pourcentageClassement
     *
     * @param string $pourcentageClassement
     * @return Classement
     */
    public function setPourcentageClassement($pourcentageClassement)
    {
        $this->pourcentageClassement = $pourcentageClassement;
    
        return $this;
    }

    /**
     * Get pourcentageClassement
     *
     * @return string 
     */
    public function getPourcentageClassement()
    {
        return $this->pourcentageClassement;
    }

    /**
     * Set imageClassement
     *
     * @param string $imageClassement
     * @return Classement
     */
    public function setImageClassement($imageClassement)
    {
        $this->imageClassement = $imageClassement;
    
        return $this;
    }

    /**
     * Get imageClassement
     *
     * @return string 
     */
    public function getImageClassement()
    {
        return $this->imageClassement;
    }
    
    public function __toString() {
        return $this->getNomClassement();
    }
}