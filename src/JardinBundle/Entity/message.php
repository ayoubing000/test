<?php

namespace JardinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="JardinBundle\Repository\messageRepository")
 */
class message
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
     * @var string
     *
     * @ORM\Column(name="adr_dest", type="string", length=255)
     */
    private $adrDest;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_src", type="string", length=255)
     */
    private $adrSrc;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=true)
     */
    private $contenu;


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
     * Set adrDest
     *
     * @param string $adrDest
     *
     * @return message
     */
    public function setAdrDest($adrDest)
    {
        $this->adrDest = $adrDest;

        return $this;
    }

    /**
     * Get adrDest
     *
     * @return string
     */
    public function getAdrDest()
    {
        return $this->adrDest;
    }

    /**
     * Set adrSrc
     *
     * @param string $adrSrc
     *
     * @return message
     */
    public function setAdrSrc($adrSrc)
    {
        $this->adrSrc = $adrSrc;

        return $this;
    }

    /**
     * Get adrSrc
     *
     * @return string
     */
    public function getAdrSrc()
    {
        return $this->adrSrc;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return message
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}

