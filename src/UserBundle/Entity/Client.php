<?php

namespace UserBundle\Entity;

use FOS\OAuthServerBundle\Entity\Client as BaseClient;
use UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\ClientRepository")
 */
class Client extends BaseClient
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
     * One Oauth client has one single User;
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\User", inversedBy="oauthClient", fetch="EAGER", cascade={"persist"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    protected $user;

	public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getRedirectUris()
    {
        return $this->redirectUris;
    }
    public function getAllowedGrantTypes()
    {
        return $this->allowedGrantTypes;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setUser(User $user = null)
    {
        $this->user = $user;
    }
}

