<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cena
 *
 * @ORM\Table(name="CENA", uniqueConstraints={@ORM\UniqueConstraint(name="AK_CENA_SEMAFOR_CENA", columns={"SEMAFOR", "ID_CENY"}), @ORM\UniqueConstraint(name="AK_ID_FIRMY_NAZWA_CENA", columns={"ID_FIRMY", "NAZWA"})}, indexes={@ORM\Index(name="CENA_IDFIR_IDCENY", columns={"ID_FIRMY", "ID_CENY"})})
 * @ORM\Entity
 */
class Cena
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENY", type="string", length=9, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCeny;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=100, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="DLA_WSZYSTKICH", type="string", length=1, nullable=true)
     */
    private $dlaWszystkich;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=true)
     */
    private $semafor;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=1, nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENY_ZAL", type="string", length=9, nullable=true)
     */
    private $idCenyZal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAJ_ZAL", type="smallint", nullable=true)
     */
    private $rodzajZal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PROCENT_CENY_ZAL", type="string", length=5, nullable=true)
     */
    private $procentCenyZal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_CENY_ZAL", type="string", length=9, nullable=true)
     */
    private $kwotaCenyZal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ZAOKR_CENY_ZAL", type="integer", nullable=true)
     */
    private $zaokrCenyZal = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="AKT_CEN_PRZY_DOSTAWIE", type="string", length=1, nullable=true)
     */
    private $aktCenPrzyDostawie = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="KOLEJNOSC", type="string", length=9, nullable=true)
     */
    private $kolejnosc = '0';



    /**
     * Get idCeny
     *
     * @return string
     */
    public function getIdCeny()
    {
        return $this->idCeny;
    }

    /**
     * Set idFirmy
     *
     * @param string $idFirmy
     *
     * @return Cena
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
     * @return Cena
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
     * Set opis
     *
     * @param string $opis
     *
     * @return Cena
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set dlaWszystkich
     *
     * @param string $dlaWszystkich
     *
     * @return Cena
     */
    public function setDlaWszystkich($dlaWszystkich)
    {
        $this->dlaWszystkich = $dlaWszystkich;

        return $this;
    }

    /**
     * Get dlaWszystkich
     *
     * @return string
     */
    public function getDlaWszystkich()
    {
        return $this->dlaWszystkich;
    }

    /**
     * Set semafor
     *
     * @param string $semafor
     *
     * @return Cena
     */
    public function setSemafor($semafor)
    {
        $this->semafor = $semafor;

        return $this;
    }

    /**
     * Get semafor
     *
     * @return string
     */
    public function getSemafor()
    {
        return $this->semafor;
    }

    /**
     * Set flagaStanu
     *
     * @param string $flagaStanu
     *
     * @return Cena
     */
    public function setFlagaStanu($flagaStanu)
    {
        $this->flagaStanu = $flagaStanu;

        return $this;
    }

    /**
     * Get flagaStanu
     *
     * @return string
     */
    public function getFlagaStanu()
    {
        return $this->flagaStanu;
    }

    /**
     * Set idCenyZal
     *
     * @param string $idCenyZal
     *
     * @return Cena
     */
    public function setIdCenyZal($idCenyZal)
    {
        $this->idCenyZal = $idCenyZal;

        return $this;
    }

    /**
     * Get idCenyZal
     *
     * @return string
     */
    public function getIdCenyZal()
    {
        return $this->idCenyZal;
    }

    /**
     * Set rodzajZal
     *
     * @param integer $rodzajZal
     *
     * @return Cena
     */
    public function setRodzajZal($rodzajZal)
    {
        $this->rodzajZal = $rodzajZal;

        return $this;
    }

    /**
     * Get rodzajZal
     *
     * @return integer
     */
    public function getRodzajZal()
    {
        return $this->rodzajZal;
    }

    /**
     * Set procentCenyZal
     *
     * @param string $procentCenyZal
     *
     * @return Cena
     */
    public function setProcentCenyZal($procentCenyZal)
    {
        $this->procentCenyZal = $procentCenyZal;

        return $this;
    }

    /**
     * Get procentCenyZal
     *
     * @return string
     */
    public function getProcentCenyZal()
    {
        return $this->procentCenyZal;
    }

    /**
     * Set kwotaCenyZal
     *
     * @param string $kwotaCenyZal
     *
     * @return Cena
     */
    public function setKwotaCenyZal($kwotaCenyZal)
    {
        $this->kwotaCenyZal = $kwotaCenyZal;

        return $this;
    }

    /**
     * Get kwotaCenyZal
     *
     * @return string
     */
    public function getKwotaCenyZal()
    {
        return $this->kwotaCenyZal;
    }

    /**
     * Set zaokrCenyZal
     *
     * @param integer $zaokrCenyZal
     *
     * @return Cena
     */
    public function setZaokrCenyZal($zaokrCenyZal)
    {
        $this->zaokrCenyZal = $zaokrCenyZal;

        return $this;
    }

    /**
     * Get zaokrCenyZal
     *
     * @return integer
     */
    public function getZaokrCenyZal()
    {
        return $this->zaokrCenyZal;
    }

    /**
     * Set aktCenPrzyDostawie
     *
     * @param string $aktCenPrzyDostawie
     *
     * @return Cena
     */
    public function setAktCenPrzyDostawie($aktCenPrzyDostawie)
    {
        $this->aktCenPrzyDostawie = $aktCenPrzyDostawie;

        return $this;
    }

    /**
     * Get aktCenPrzyDostawie
     *
     * @return string
     */
    public function getAktCenPrzyDostawie()
    {
        return $this->aktCenPrzyDostawie;
    }

    /**
     * Set kolejnosc
     *
     * @param string $kolejnosc
     *
     * @return Cena
     */
    public function setKolejnosc($kolejnosc)
    {
        $this->kolejnosc = $kolejnosc;

        return $this;
    }

    /**
     * Get kolejnosc
     *
     * @return string
     */
    public function getKolejnosc()
    {
        return $this->kolejnosc;
    }
}
