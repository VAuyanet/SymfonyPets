<?php

namespace pets\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Usuaris
 *
 * @ORM\Table(name="departament")
 * @ORM\Entity
 */
class Departament
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_departament", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDepartament;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     * @Assert\Length(
     * min=2,
     * minMessage = "Your first name must be at least {{ limit }} characters long"
     * )
     */
    private $nom;

    
    /**
     * Get idDepartament
     *
     * @return integer
     */
    public function getIdDepartament()
    {
        return $this->idDepartament;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Departament
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

    
}
