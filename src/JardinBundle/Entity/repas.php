<?php

namespace JardinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * repas
 *
 * @ORM\Table(name="repas")
 * @ORM\Entity(repositoryClass="JardinBundle\Repository\repasRepository")
 */
class repas
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
     * @var array
     *
     * @ORM\Column(name="menu", type="array")
     */
    private $menu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_repas", type="date")
     */
    private $dateRepas;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


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
     * Set menu
     *
     * @param array $menu
     *
     * @return repas
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return array
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Set dateRepas
     *
     * @param \DateTime $dateRepas
     *
     * @return repas
     */
    public function setDateRepas($dateRepas)
    {
        $this->dateRepas = $dateRepas;

        return $this;
    }

    /**
     * Get dateRepas
     *
     * @return \DateTime
     */
    public function getDateRepas()
    {
        return $this->dateRepas;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return repas
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return repas
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

