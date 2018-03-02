<?php

namespace pets\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tasques
 *
 * @ORM\Table(name="tasques")
 * @ORM\Entity
 */
class Tasques
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tasca", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */

    private $idTasca;

    /**
     * @var string
     *
     * @ORM\Column(name="titol", type="text", length=65535, nullable=false)
     * @Assert\Length(
     * min=2,
     * minMessage = "El titol ha de ser de com a minim {{ limit }} caracters"
     * )
     */
    private $titol;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcio", type="text", length=65535, nullable=false)
     * @Assert\Length(
     * min=5,
     * minMessage = "El titol ha de ser de com a minim {{ limit }} caracters"
     * max=240,
     * maxMessage = "El titol ha de ser de com a maxim {{ limit }} caracters"
     * )
     */
    private $descripcio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inici", type="date", nullable=false)
     * @Assert\NotBlank()
     */
    private $dataInici;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_final", type="date", nullable=false)
     * @Assert\NotBlank()
     */
    private $dataFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="estat", type="text", length=65535, nullable=false)
     * @Assert\NotBlank()
     */
    private $estat;

    /**
     * @var string
     *
     * @ORM\Column(name="prioritat", type="text", length=65535, nullable=false)
     * @Assert\Choice(
     *     choices = { "molt alta", "alta", "mitja", "baixa" },
     *     message = "Nomes pots assignar la prioritat com a molt alta, alta, mitja o baixa"
     * )     
     */
    private $prioritat;

    /**
     * @var string
     *
     * @ORM\Column(name="departament", type="text", length=65535, nullable=false)
     * 
     */
    private $departament;



    /**
     * Get idTasca
     *
     * @return integer
     */
    public function getIdTasca()
    {
        return $this->idTasca;
    }

    /**
     * Set titol
     *
     * @param string $titol
     *
     * @return Tasques
     */
    public function setTitol($titol)
    {
        $this->titol = $titol;

        return $this;
    }

    /**
     * Get titol
     *
     * @return string
     */
    public function getTitol()
    {
        return $this->titol;
    }

    /**
     * Set descripcio
     *
     * @param string $descripcio
     *
     * @return Tasques
     */
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;

        return $this;
    }

    /**
     * Get descripcio
     *
     * @return string
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }

    /**
     * Set dataInici
     *
     * @param \DateTime $dataInici
     *
     * @return Tasques
     */
    public function setDataInici($dataInici)
    {
        $this->dataInici = $dataInici;

        return $this;
    }

    /**
     * Get dataInici
     *
     * @return \DateTime
     */
    public function getDataInici()
    {
        return $this->dataInici;
    }

    /**
     * Set dataFinal
     *
     * @param \DateTime $dataFinal
     *
     * @return Tasques
     */
    public function setDataFinal($dataFinal)
    {
        $this->dataFinal = $dataFinal;

        return $this;
    }

    /**
     * Get dataFinal
     *
     * @return \DateTime
     */
    public function getDataFinal()
    {
        return $this->dataFinal;
    }

    /**
     * Set estat
     *
     * @param string $estat
     *
     * @return Tasques
     */
    public function setEstat($estat)
    {
        $this->estat = $estat;

        return $this;
    }

    /**
     * Get estat
     *
     * @return string
     */
    public function getEstat()
    {
        return $this->estat;
    }

    /**
     * Set prioritat
     *
     * @param string $prioritat
     *
     * @return Tasques
     */
    public function setPrioritat($prioritat)
    {
        $this->prioritat = $prioritat;

        return $this;
    }

    /**
     * Get prioritat
     *
     * @return string
     */
    public function getPrioritat()
    {
        return $this->prioritat;
    }

    /**
     * Set departament
     *
     * @param string $departament
     *
     * @return Tasques
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
