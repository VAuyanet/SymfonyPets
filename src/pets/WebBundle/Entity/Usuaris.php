<?php

namespace pets\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Usuaris
 *
 * @ORM\Table(name="usuaris")
 * @ORM\Entity
 */
class Usuaris
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
     * @Assert\Length(
     * min=5,
     * max=10,
     * minMessage = "Your first name must be at least {{ limit }} characters long",
     * maxMessage = "Your first name must be max {{ limit }} characters long"
     * )
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
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="perfil", type="text", length=65535, nullable=false)
     *
     */
    private $perfil;
    
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text", length=65535, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Choice(
     *     choices = { "admin", "treballador", "booking" },
     *     message = "Nomes pots assignar el rol de admin, treballador o booking"
     * )     */
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
     * Set perfil
     *
     * @param string $perfil
     *
     * @return Usuaris
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }

    /**
     * Get perfil
     *
     * @return string
     */
    public function getPerfil()
    {
        return $this->perfil;
    }
    
    /**
     * Set password
     *
     * @param string $perfil
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
}
