<?php

namespace Vworkit\VworkitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table("competence")
 * @ORM\Entity(repositoryClass="Vworkit\VworkitBundle\Repository\CompetenceRepository")
 */
class Competence
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
     * @ORM\ManyToOne(targetEntity="Vworkit\VworkitBundle\Entity\Categories", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_competence", type="string", length=100)
     */
    private $nomCompetence;


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
     * Set nomCompetence
     *
     * @param string $nomCompetence
     * @return Competence
     */
    public function setNomCompetence($nomCompetence)
    {
        $this->nomCompetence = $nomCompetence;
    
        return $this;
    }

    /**
     * Get nomCompetence
     *
     * @return string 
     */
    public function getNomCompetence()
    {
        return $this->nomCompetence;
    }
    
    public function __toString() {
        return $this->getNomCompetence();
    }
    

    /**
     * Set categorie
     *
     * @param \Vworkit\VworkitBundle\Entity\Categories $categorie
     * @return Competence
     */
    public function setCategorie(\Vworkit\VworkitBundle\Entity\Categories $categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Vworkit\VworkitBundle\Entity\Categories 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}