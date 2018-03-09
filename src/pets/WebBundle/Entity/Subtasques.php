<?php

namespace pets\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Subtasques
 *
 * @ORM\Table(name="subtasques", indexes={@ORM\Index(name="idTasca", columns={"idTasca"})})
 * @ORM\Entity
 */
class Subtasques
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSubtasca", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSubtasca;

    /**
     * @var string
     *
     * @ORM\Column(name="titol", type="text", length=65535, nullable=false)
     */
    private $titol;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcio", type="text", length=65535, nullable=false)
     */
    private $descripcio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inici", type="date", nullable=false)
     */
    private $dataInici;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_final", type="date", nullable=false)
     */
    private $dataFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="prioritat", type="text", length=65535, nullable=false)
     */
    private $prioritat;

    /**
     * @var string
     *
     * @ORM\Column(name="usuaris", type="text", length=65535, nullable=false)
     */
    private $usuaris;

    /**
     * @var \Tasques
     *
     * @ORM\ManyToOne(targetEntity="Tasques")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTasca", referencedColumnName="idTasca")
     * })
     */
    private $idTasca;


   
    /**
     * Get idSubtasca
     *
     * @return integer
     */
    public function getIdSubtasca()
    {
        return $this->idSubtasca;
    }

    /**
     * Set titol
     *
     * @param string $titol
     *
     * @return Subtasques
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
     * @return Subtasques
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
     * @return Subtasques
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
     * @return Subtasques
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
     * Set prioritat
     *
     * @param string $prioritat
     *
     * @return Subtasques
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
     * Set usuaris
     *
     * @param string $usuaris
     *
     * @return Subtasques
     */
    public function setUsuaris($usuaris)
    {
        $this->usuaris = $usuaris;

        return $this;
    }

    /**
     * Get usuaris
     *
     * @return string
     */
    public function getUsuaris()
    {
        return $this->usuaris;
    }

    /**
     * Set idTasca
     *
     * @param \pets\WebBundle\Entity\Tasques $idTasca
     *
     * @return Subtasques
     */
    public function setIdTasca(\pets\WebBundle\Entity\Tasques $idTasca = null)
    {
        $this->idTasca = $idTasca;

        return $this;
    }

    /**
     * Get idTasca
     *
     * @return \pets\WebBundle\Entity\Tasques
     */
    public function getIdTasca()
    {
        return $this->idTasca;
    }
}
