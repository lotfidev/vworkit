<?php

namespace Vworkit\VworkitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tache
 *
 * @ORM\Table("Tache")
 * @ORM\Entity(repositoryClass="Vworkit\VworkitBundle\Repository\TacheRepository")
 */
class Tache
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
     * @ORM\Column(name="nom_tache", type="string", length=100)
     */
    private $nomTache;
    
    /**
     * @ORM\ManyToOne(targetEntity="Vworkit\VworkitBundle\Entity\LabelTache", cascade={"persist"})
     * @ORM\joinColumn(nullable=false,onDelete="CASCADE")
     */
    private $label;

    /**
     * @ORM\ManyToOne(targetEntity="Vworkit\VworkitBundle\Entity\Progression", cascade={"persist"})
     * @ORM\joinColumn(nullable=false,onDelete="CASCADE")
     */
    private $progression;
    
    /**
     * @ORM\ManyToOne(targetEntity="Vworkit\VworkitBundle\Entity\Reunion", cascade={"persist"})
     * @ORM\joinColumn(nullable=false,onDelete="CASCADE")
     */
    private $reunion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description_tache", type="text")
     */
    private $descriptionTache;
    
    
    
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout_tache", type="datetime")
     */
    private $dateAjoutTache;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_ajout_tache", type="datetime")
     */
    private $finAjoutTache;


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
     * Set descriptionTache
     *
     * @param string $descriptionTache
     * @return Tache
     */
    public function setDescriptionTache($descriptionTache)
    {
        $this->descriptionTache = $descriptionTache;
    
        return $this;
    }

    /**
     * Get descriptionTache
     *
     * @return string 
     */
    public function getDescriptionTache()
    {
        return $this->descriptionTache;
    }

    

    

    /**
     * Set dateAjoutTache
     *
     * @param \DateTime $dateAjoutTache
     * @return Tache
     */
    public function setDateAjoutTache($dateAjoutTache)
    {
        $this->dateAjoutTache = $dateAjoutTache;
    
        return $this;
    }

    /**
     * Get dateAjoutTache
     *
     * @return \DateTime 
     */
    public function getDateAjoutTache()
    {
        return $this->dateAjoutTache;
    }

    /**
     * Set finAjoutTache
     *
     * @param \DateTime $finAjoutTache
     * @return Tache
     */
    public function setFinAjoutTache($finAjoutTache)
    {
        $this->finAjoutTache = $finAjoutTache;
    
        return $this;
    }

    /**
     * Get finAjoutTache
     *
     * @return \DateTime 
     */
    public function getFinAjoutTache()
    {
        return $this->finAjoutTache;
    }

    /**
     * Set reunion
     *
     * @param \Vworkit\VworkitBundle\Entity\Reunion $reunion
     * @return Tache
     */
    public function setReunion(\Vworkit\VworkitBundle\Entity\Reunion $reunion)
    {
        $this->reunion = $reunion;
    
        return $this;
    }

    /**
     * Get reunion
     *
     * @return \Vworkit\VworkitBundle\Entity\Reunion 
     */
    public function getReunion()
    {
        return $this->reunion;
    }

    


    /**
     * Set progression
     *
     * @param \Vworkit\VworkitBundle\Entity\Progression $progression
     * @return Tache
     */
    public function setProgression(\Vworkit\VworkitBundle\Entity\Progression $progression)
    {
        $this->progression = $progression;
    
        return $this;
    }

    /**
     * Get progression
     *
     * @return \Vworkit\VworkitBundle\Entity\Progression 
     */
    public function getProgression()
    {
        return $this->progression;
    }

    /**
     * Set nomTache
     *
     * @param string $nomTache
     * @return Tache
     */
    public function setNomTache($nomTache)
    {
        $this->nomTache = $nomTache;
    
        return $this;
    }

    /**
     * Get nomTache
     *
     * @return string 
     */
    public function getNomTache()
    {
        return $this->nomTache;
    }
    
    public function __toString(){
        return $this->getNomTache();   
    }

    /**
     * Set labelTache
     *
     * @param string $labelTache
     * @return Tache
     */
    

    /**
     * Set label
     *
     * @param \Vworkit\VworkitBundle\Entity\LabelTache $label
     * @return Tache
     */
    public function setLabel(\Vworkit\VworkitBundle\Entity\LabelTache $label)
    {
        $this->label = $label;
    
        return $this;
    }

    /**
     * Get label
     *
     * @return \Vworkit\VworkitBundle\Entity\LabelTache 
     */
    public function getLabel()
    {
        return $this->label;
    }
}