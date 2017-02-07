<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM,
    Symfony\Component\Security\Core\Role\RoleInterface;

/**
 * @ORM\Entity(repositoryClass="Api\CoreBundle\Repository\RoleRepository")
 * @ORM\Table(name="user_role")
 */
class Role implements RoleInterface
{
    
    const USER         = 'ROLE_USER';
    const ADMIN        = 'ROLE_ADMIN';

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=false)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     */
    private $role;
    
    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
     */
    private $users;

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
     * Set role
     *
     * @param string $role
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }
    
    /**
     * Get role
     *
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }
    
    /**
     * Set title
     *
     * @param string $title
     * @return Role
     */
    public function setTitle($title)
    {
        $this->role = $title;
        return $this;
    }
    
    /**
     * Get title
     *
     * @return Role
     */
    public function getTitle()
    {
        return $this->title;
    }
    
}
