<?php

namespace Utilisateur\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visite
 *
 * @ORM\Table("Visite")
 * @ORM\Entity(repositoryClass="Utilisateur\UtilisateurBundle\Repository\VisiteRepository")
 */
class Visite
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
     * @ORM\ManyToOne(targetEntity="Utilisateur\UtilisateurBundle\Entity\Utilisateur", cascade={"persist"})
     * @ORM\joinColumn(nullable=false,onDelete="CASCADE")
     */
    private $from;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur\UtilisateurBundle\Entity\Utilisateur", cascade={"persist"})
     * @ORM\joinColumn(nullable=false,onDelete="CASCADE")
     */
    private $to;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datevisite", type="datetime")
     */
    private $datevisite;


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
     * Set datevisite
     *
     * @param \DateTime $datevisite
     * @return Visite
     */
    public function setDatevisite($datevisite)
    {
        $this->datevisite = $datevisite;
    
        return $this;
    }

    /**
     * Get datevisite
     *
     * @return \DateTime 
     */
    public function getDatevisite()
    {
        return $this->datevisite;
    }

    /**
     * Set from
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Utilisateur $from
     * @return Visite
     */
    public function setFrom(\Utilisateur\UtilisateurBundle\Entity\Utilisateur $from)
    {
        $this->from = $from;
    
        return $this;
    }

    /**
     * Get from
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Utilisateur 
     */
    public function getFrom()
    {
        return $this->from;
    }

    


    /**
     * Set to
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Utilisateur $to
     * @return Visite
     */
    public function setTo(\Utilisateur\UtilisateurBundle\Entity\Utilisateur $to)
    {
        $this->to = $to;
    
        return $this;
    }

    /**
     * Get to
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Utilisateur 
     */
    public function getTo()
    {
        return $this->to;
    }
}