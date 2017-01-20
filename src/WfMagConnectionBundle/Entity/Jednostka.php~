<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jednostka
 *
 * @ORM\Table(name="JEDNOSTKA", indexes={@ORM\Index(name="JEDNOSTKA_IDFIR_SKROT", columns={"ID_FIRMY", "ID_ARTYKULU", "SKROT"})})
 * @ORM\Entity
 */
class Jednostka
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_JEDNOSTKI", type="string", length=9, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idJednostki;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=20, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="SKROT", type="string", length=10, nullable=false)
     */
    private $skrot;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=true)
     */
    private $przelicznik = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="PODZIELNA", type="string", length=1, nullable=true)
     */
    private $podzielna;

    /**
     * @var string
     *
     * @ORM\Column(name="WZORZEC_INNEJ", type="string", length=1, nullable=true)
     */
    private $wzorzecInnej = '0';



    /**
     * Get idJednostki
     *
     * @return string
     */
    public function getIdJednostki()
    {
        return $this->idJednostki;
    }

    /**
     * Set idArtykulu
     *
     * @param string $idArtykulu
     *
     * @return Jednostka
     */
    public function setIdArtykulu($idArtykulu)
    {
        $this->idArtykulu = $idArtykulu;

        return $this;
    }

    /**
     * Get idArtykulu
     *
     * @return string
     */
    public function getIdArtykulu()
    {
        return $this->idArtykulu;
    }

    /**
     * Set idFirmy
     *
     * @param string $idFirmy
     *
     * @return Jednostka
     */
    public function setIdFirmy($idFirmy)
    {
        $this->idFirmy = $idFirmy;

        return $this;
    }

    /**
     * Get idFirmy
     *
     * @return string
     */
    public function getIdFirmy()
    {
        return $this->idFirmy;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return Jednostka
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set skrot
     *
     * @param string $skrot
     *
     * @return Jednostka
     */
    public function setSkrot($skrot)
    {
        $this->skrot = $skrot;

        return $this;
    }

    /**
     * Get skrot
     *
     * @return string
     */
    public function getSkrot()
    {
        return $this->skrot;
    }

    /**
     * Set przelicznik
     *
     * @param string $przelicznik
     *
     * @return Jednostka
     */
    public function setPrzelicznik($przelicznik)
    {
        $this->przelicznik = $przelicznik;

        return $this;
    }

    /**
     * Get przelicznik
     *
     * @return string
     */
    public function getPrzelicznik()
    {
        return $this->przelicznik;
    }

    /**
     * Set podzielna
     *
     * @param string $podzielna
     *
     * @return Jednostka
     */
    public function setPodzielna($podzielna)
    {
        $this->podzielna = $podzielna;

        return $this;
    }

    /**
     * Get podzielna
     *
     * @return string
     */
    public function getPodzielna()
    {
        return $this->podzielna;
    }

    /**
     * Set wzorzecInnej
     *
     * @param string $wzorzecInnej
     *
     * @return Jednostka
     */
    public function setWzorzecInnej($wzorzecInnej)
    {
        $this->wzorzecInnej = $wzorzecInnej;

        return $this;
    }

    /**
     * Get wzorzecInnej
     *
     * @return string
     */
    public function getWzorzecInnej()
    {
        return $this->wzorzecInnej;
    }
}
