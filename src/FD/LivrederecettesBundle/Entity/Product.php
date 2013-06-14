<?php

namespace FD\LivrederecettesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FD\LivrederecettesBundle\Entity\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Season_start", type="date")
     */
    private $seasonStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Season_end", type="date")
     */
    private $seasonEnd;
    
    /**
     * @ORM\ManyToOne(targetEntity="FD\LivrederecettesBundle\Entity\Type")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;


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
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set seasonStart
     *
     * @param \DateTime $seasonStart
     * @return Product
     */
    public function setSeasonStart($seasonStart)
    {
        $this->seasonStart = $seasonStart;
    
        return $this;
    }

    /**
     * Get seasonStart
     *
     * @return \DateTime 
     */
    public function getSeasonStart()
    {
        return $this->seasonStart;
    }

    /**
     * Set seasonEnd
     *
     * @param \DateTime $seasonEnd
     * @return Product
     */
    public function setSeasonEnd($seasonEnd)
    {
        $this->seasonEnd = $seasonEnd;
    
        return $this;
    }

    /**
     * Get seasonEnd
     *
     * @return \DateTime 
     */
    public function getSeasonEnd()
    {
        return $this->seasonEnd;
    }

    /**
     * Set type
     *
     * @param \FD\LivrederecettesBundle\Entity\Type $type
     * @return Product
     */
    public function setType(\FD\LivrederecettesBundle\Entity\Type $type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return \FD\LivrederecettesBundle\Entity\Type 
     */
    public function getType()
    {
        return $this->type;
    }
}