<?php

namespace Club\MailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Club\MailBundle\Repository\Mail")
 * @ORM\Table(name="club_mail")
 */
class Mail
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var integer $id
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $subject
     */
    private $subject;

    /**
     * @ORM\Column(type="text")
     *
     * @var text $body
     */
    private $body;

    /**
     * @ORM\ManytoMany(targetEntity="Club\UserBundle\Entity\Location")
     *
     * @var Club\UserBundle\Entity\Location
     */
    private $locations;

    /**
     * @ORM\ManytoMany(targetEntity="Club\UserBundle\Entity\Group")
     *
     * @var Club\UserBundle\Entity\Group
     */
    private $groups;

    /**
     * @ORM\ManytoMany(targetEntity="Club\UserBundle\Entity\User")
     *
     * @var Club\UserBundle\Entity\User
     */
    private $users;

    public function __construct()
    {
        $this->locations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set subject
     *
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Get subject
     *
     * @return string $subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param text $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * Get body
     *
     * @return text $body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Add locations
     *
     * @param Club\UserBundle\Entity\Location $locations
     */
    public function addLocations(\Club\UserBundle\Entity\Location $locations)
    {
        $this->locations[] = $locations;
    }

    /**
     * Get locations
     *
     * @return Doctrine\Common\Collections\Collection $locations
     */
    public function getLocations()
    {
        return $this->locations;
    }
}
