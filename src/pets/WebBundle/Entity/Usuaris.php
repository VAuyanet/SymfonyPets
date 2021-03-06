<?php

namespace pets\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * Usuaris
 *
 * @ORM\Table(name="usuaris")
 * @ORM\Entity
 */
class Usuaris implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuari", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuari;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     * 
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="cognoms", type="text", length=65535, nullable=false)
     * 
     */
    private $cognoms;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=65535, nullable=false)
     * @Assert\Email(
     *     message = "El e-mail '{{ value }}' no es valid",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="text", length=65535, nullable=false)
     * @Assert\Choice(
     *     choices = { "ADMIN", "DISSENY", "CONTINGUT" },
     *     message = "Nomes pots assignar el rol de ADMIN, DISSENY o CONTINGUT (en majuscules)"
     * )
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text", length=65535, nullable=false)
     * @Assert\NotBlank()     
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="departament", type="text", length=65535, nullable=false)
     * 
     */
    private $departament;



    /**
     * Get idUsuari
     *
     * @return integer
     */
    public function getIdUsuari()
    {
        return $this->idUsuari;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Usuaris
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set cognoms
     *
     * @param string $cognoms
     *
     * @return Usuaris
     */
    public function setCognoms($cognoms)
    {
        $this->cognoms = $cognoms;

        return $this;
    }

    /**
     * Get cognoms
     *
     * @return string
     */
    public function getCognoms()
    {
        return $this->cognoms;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuaris
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Usuaris
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set password
     *
     * @param string $role
     *
     * @return Usuaris
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set departament
     *
     * @param string $departament
     *
     * @return Usuaris
     */
    public function setDepartament($departament)
    {
        $this->departament = $departament;

        return $this;
    }

    /**
     * Get departament
     *
     * @return string
     */
    public function getDepartament()
    {
        return $this->departament;
    }

    /**
     * Get email/username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->email;
    }

    public function getSalt()
    {
        return null;
    }

    public function getRoles()
    {
        // En este caso definimos un rol fijo, en el caso de que tengamos un campo role en la tabla de la BBDD    tendríamos que hacer $this->getRole()
        return ["ROLE_".$this->role.""];
    }

    public function eraseCredentials()
    {
    }
    
    public function __toString() {
        return strval($this->idUsuari);
    }

}
