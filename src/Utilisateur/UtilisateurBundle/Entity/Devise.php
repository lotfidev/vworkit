<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devise
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Utilisateur\UtilisateurBundle\Repository\DeviseRepository")
 */
class Devise
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
     * @ORM\Column(name="nom_devise", type="string", length=100, nullable=true)
     */
    private $nomDevise;


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
     * Set nomDevise
     *
     * @param string $nomDevise
     * @return Devise
     */
    public function setNomDevise($nomDevise)
    {
        $this->nomDevise = $nomDevise;
    
        return $this;
    }

    /**
     * Get nomDevise
     *
     * @return string 
     */
    public function getNomDevise()
    {
        return $this->nomDevise;
    }
    
    public function __toString() {
        return $this->getNomDevise();
    }
}