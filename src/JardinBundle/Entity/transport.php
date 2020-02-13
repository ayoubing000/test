<?php

namespace JardinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * transport
 *
 * @ORM\Table(name="transport")
 * @ORM\Entity(repositoryClass="JardinBundle\Repository\transportRepository")
 */
class transport
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
     * @var int
     *
     * @ORM\Column(name="nbr_bus", type="integer")
     */
    private $nbrBus;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_enfant", type="integer")
     */
    private $nbrEnfant;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;


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
     * Set nbrBus
     *
     * @param integer $nbrBus
     *
     * @return transport
     */
    public function setNbrBus($nbrBus)
    {
        $this->nbrBus = $nbrBus;

        return $this;
    }

    /**
     * Get nbrBus
     *
     * @return int
     */
    public function getNbrBus()
    {
        return $this->nbrBus;
    }

    /**
     * Set nbrEnfant
     *
     * @param integer $nbrEnfant
     *
     * @return transport
     */
    public function setNbrEnfant($nbrEnfant)
    {
        $this->nbrEnfant = $nbrEnfant;

        return $this;
    }

    /**
     * Get nbrEnfant
     *
     * @return int
     */
    public function getNbrEnfant()
    {
        return $this->nbrEnfant;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return transport
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }
}

