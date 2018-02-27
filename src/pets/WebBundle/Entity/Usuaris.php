<?php

namespace pets\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="cognoms", type="text", length=65535, nullable=false)
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
     */
    private $perfil;



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
}
