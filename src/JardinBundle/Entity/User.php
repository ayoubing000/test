<?php

namespace JardinBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as FosUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="JardinBundle\Repository\UserRepository")
 */
class User extends FosUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="enfant",mappedBy="parent")
     */

    private $enfants;


    public function __construct()
    {
        parent::__construct();
        $this->enfants=new ArrayCollection();
    }


    /**
     * Sets the email.
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->setUsername($email);

        return parent::setEmail($email);
    }

    /**
     * @return mixed
     */
    public function getParen()
    {
        return $this->paren;
    }

    /**
     * @param mixed $paren
     */
    public function setParen($paren)
    {
        $this->paren = $paren;
    }

    /**
     * @return mixed
     */
    public function getFactures()
    {
        return $this->factures;
    }

    /**
     * @param mixed $factures
     */
    public function setFactures($factures)
    {
        $this->factures = $factures;
    }

    /**
     * Set the canonical email.
     *
     * @param string $emailCanonical
     * @return User
     */
    public function setEmailCanonical($emailCanonical)
    {
        $this->setUsernameCanonical($emailCanonical);

        return parent::setEmailCanonical($emailCanonical);
    }


}

