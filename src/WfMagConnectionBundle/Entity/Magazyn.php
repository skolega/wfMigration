<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Magazyn
 *
 * @ORM\Table(name="MAGAZYN", uniqueConstraints={@ORM\UniqueConstraint(name="AK_FIRMA_SYMBOL_NAZWA_MAGAZYN", columns={"ID_FIRMY", "SYMBOL", "NAZWA"}), @ORM\UniqueConstraint(name="MAGAZYN_NAZWA", columns={"ID_MAGAZYNU", "NAZWA"})}, indexes={@ORM\Index(name="MAGAZYN_WYROZNIK_SYNCHRO", columns={"WYROZNIK_SYNCHRONIZACJI"})})
 * @ORM\Entity
 */
class Magazyn
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idMagazynu;

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
     * @ORM\Column(name="SYMBOL", type="string", length=10, nullable=false)
     */
    private $symbol;

    /**
     * @var string
     *
     * @ORM\Column(name="LOKALIZACJA", type="string", length=100, nullable=true)
     */
    private $lokalizacja;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=200, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="STAN_MAGAZYNU", type="string", length=10, nullable=true)
     */
    private $stanMagazynu = 'Praca';

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_FK_MAGAZYNU", type="string", length=70, nullable=true)
     */
    private $kontoFkMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_FK_OPAKOWAN", type="string", length=70, nullable=true)
     */
    private $kontoFkOpakowan;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_FK_TOWWDRODZE", type="string", length=70, nullable=true)
     */
    private $kontoFkTowwdrodze;

    /**
     * @var string
     *
     * @ORM\Column(name="NAGLOWEK", type="string", length=500, nullable=true)
     */
    private $naglowek;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCE_WYSTAWIENIA", type="string", length=50, nullable=true)
     */
    private $miejsceWystawienia;

    /**
     * @var string
     *
     * @ORM\Column(name="WYROZNIK_SYNCHRONIZACJI", type="string", length=20, nullable=false)
     */
    private $wyroznikSynchronizacji = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="string", length=9, nullable=false)
     */
    private $idRachunku = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="POLE1", type="string", length=100, nullable=true)
     */
    private $pole1;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE2", type="string", length=100, nullable=true)
     */
    private $pole2;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE3", type="string", length=100, nullable=true)
     */
    private $pole3;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE4", type="string", length=100, nullable=true)
     */
    private $pole4;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE5", type="string", length=100, nullable=true)
     */
    private $pole5;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE6", type="string", length=100, nullable=true)
     */
    private $pole6;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE7", type="string", length=100, nullable=true)
     */
    private $pole7;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE8", type="string", length=100, nullable=true)
     */
    private $pole8;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE9", type="string", length=100, nullable=true)
     */
    private $pole9;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE10", type="string", length=100, nullable=true)
     */
    private $pole10;

    /**
     * @var string
     *
     * @ORM\Column(name="REMANENT_CZASTKOWY", type="string", length=1, nullable=true)
     */
    private $remanentCzastkowy = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="WSPOLNA_NUM_INDEKSOW", type="smallint", nullable=true)
     */
    private $wspolnaNumIndeksow = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA_I_KATALOG", type="string", length=30, nullable=true)
     */
    private $maskaIKatalog = '';

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA_I_HANDL", type="string", length=30, nullable=true)
     */
    private $maskaIHandl = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="WZORZEC_KAT_ART_TREE", type="smallint", nullable=true)
     */
    private $wzorzecKatArtTree = '0';



    /**
     * Get idMagazynu
     *
     * @return string
     */
    public function getIdMagazynu()
    {
        return $this->idMagazynu;
    }

    /**
     * Set idFirmy
     *
     * @param string $idFirmy
     *
     * @return Magazyn
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
     * @return Magazyn
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
     * Set symbol
     *
     * @param string $symbol
     *
     * @return Magazyn
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Set lokalizacja
     *
     * @param string $lokalizacja
     *
     * @return Magazyn
     */
    public function setLokalizacja($lokalizacja)
    {
        $this->lokalizacja = $lokalizacja;

        return $this;
    }

    /**
     * Get lokalizacja
     *
     * @return string
     */
    public function getLokalizacja()
    {
        return $this->lokalizacja;
    }

    /**
     * Set opis
     *
     * @param string $opis
     *
     * @return Magazyn
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
     * Set stanMagazynu
     *
     * @param string $stanMagazynu
     *
     * @return Magazyn
     */
    public function setStanMagazynu($stanMagazynu)
    {
        $this->stanMagazynu = $stanMagazynu;

        return $this;
    }

    /**
     * Get stanMagazynu
     *
     * @return string
     */
    public function getStanMagazynu()
    {
        return $this->stanMagazynu;
    }

    /**
     * Set kontoFkMagazynu
     *
     * @param string $kontoFkMagazynu
     *
     * @return Magazyn
     */
    public function setKontoFkMagazynu($kontoFkMagazynu)
    {
        $this->kontoFkMagazynu = $kontoFkMagazynu;

        return $this;
    }

    /**
     * Get kontoFkMagazynu
     *
     * @return string
     */
    public function getKontoFkMagazynu()
    {
        return $this->kontoFkMagazynu;
    }

    /**
     * Set kontoFkOpakowan
     *
     * @param string $kontoFkOpakowan
     *
     * @return Magazyn
     */
    public function setKontoFkOpakowan($kontoFkOpakowan)
    {
        $this->kontoFkOpakowan = $kontoFkOpakowan;

        return $this;
    }

    /**
     * Get kontoFkOpakowan
     *
     * @return string
     */
    public function getKontoFkOpakowan()
    {
        return $this->kontoFkOpakowan;
    }

    /**
     * Set kontoFkTowwdrodze
     *
     * @param string $kontoFkTowwdrodze
     *
     * @return Magazyn
     */
    public function setKontoFkTowwdrodze($kontoFkTowwdrodze)
    {
        $this->kontoFkTowwdrodze = $kontoFkTowwdrodze;

        return $this;
    }

    /**
     * Get kontoFkTowwdrodze
     *
     * @return string
     */
    public function getKontoFkTowwdrodze()
    {
        return $this->kontoFkTowwdrodze;
    }

    /**
     * Set naglowek
     *
     * @param string $naglowek
     *
     * @return Magazyn
     */
    public function setNaglowek($naglowek)
    {
        $this->naglowek = $naglowek;

        return $this;
    }

    /**
     * Get naglowek
     *
     * @return string
     */
    public function getNaglowek()
    {
        return $this->naglowek;
    }

    /**
     * Set miejsceWystawienia
     *
     * @param string $miejsceWystawienia
     *
     * @return Magazyn
     */
    public function setMiejsceWystawienia($miejsceWystawienia)
    {
        $this->miejsceWystawienia = $miejsceWystawienia;

        return $this;
    }

    /**
     * Get miejsceWystawienia
     *
     * @return string
     */
    public function getMiejsceWystawienia()
    {
        return $this->miejsceWystawienia;
    }

    /**
     * Set wyroznikSynchronizacji
     *
     * @param string $wyroznikSynchronizacji
     *
     * @return Magazyn
     */
    public function setWyroznikSynchronizacji($wyroznikSynchronizacji)
    {
        $this->wyroznikSynchronizacji = $wyroznikSynchronizacji;

        return $this;
    }

    /**
     * Get wyroznikSynchronizacji
     *
     * @return string
     */
    public function getWyroznikSynchronizacji()
    {
        return $this->wyroznikSynchronizacji;
    }

    /**
     * Set idRachunku
     *
     * @param string $idRachunku
     *
     * @return Magazyn
     */
    public function setIdRachunku($idRachunku)
    {
        $this->idRachunku = $idRachunku;

        return $this;
    }

    /**
     * Get idRachunku
     *
     * @return string
     */
    public function getIdRachunku()
    {
        return $this->idRachunku;
    }

    /**
     * Set pole1
     *
     * @param string $pole1
     *
     * @return Magazyn
     */
    public function setPole1($pole1)
    {
        $this->pole1 = $pole1;

        return $this;
    }

    /**
     * Get pole1
     *
     * @return string
     */
    public function getPole1()
    {
        return $this->pole1;
    }

    /**
     * Set pole2
     *
     * @param string $pole2
     *
     * @return Magazyn
     */
    public function setPole2($pole2)
    {
        $this->pole2 = $pole2;

        return $this;
    }

    /**
     * Get pole2
     *
     * @return string
     */
    public function getPole2()
    {
        return $this->pole2;
    }

    /**
     * Set pole3
     *
     * @param string $pole3
     *
     * @return Magazyn
     */
    public function setPole3($pole3)
    {
        $this->pole3 = $pole3;

        return $this;
    }

    /**
     * Get pole3
     *
     * @return string
     */
    public function getPole3()
    {
        return $this->pole3;
    }

    /**
     * Set pole4
     *
     * @param string $pole4
     *
     * @return Magazyn
     */
    public function setPole4($pole4)
    {
        $this->pole4 = $pole4;

        return $this;
    }

    /**
     * Get pole4
     *
     * @return string
     */
    public function getPole4()
    {
        return $this->pole4;
    }

    /**
     * Set pole5
     *
     * @param string $pole5
     *
     * @return Magazyn
     */
    public function setPole5($pole5)
    {
        $this->pole5 = $pole5;

        return $this;
    }

    /**
     * Get pole5
     *
     * @return string
     */
    public function getPole5()
    {
        return $this->pole5;
    }

    /**
     * Set pole6
     *
     * @param string $pole6
     *
     * @return Magazyn
     */
    public function setPole6($pole6)
    {
        $this->pole6 = $pole6;

        return $this;
    }

    /**
     * Get pole6
     *
     * @return string
     */
    public function getPole6()
    {
        return $this->pole6;
    }

    /**
     * Set pole7
     *
     * @param string $pole7
     *
     * @return Magazyn
     */
    public function setPole7($pole7)
    {
        $this->pole7 = $pole7;

        return $this;
    }

    /**
     * Get pole7
     *
     * @return string
     */
    public function getPole7()
    {
        return $this->pole7;
    }

    /**
     * Set pole8
     *
     * @param string $pole8
     *
     * @return Magazyn
     */
    public function setPole8($pole8)
    {
        $this->pole8 = $pole8;

        return $this;
    }

    /**
     * Get pole8
     *
     * @return string
     */
    public function getPole8()
    {
        return $this->pole8;
    }

    /**
     * Set pole9
     *
     * @param string $pole9
     *
     * @return Magazyn
     */
    public function setPole9($pole9)
    {
        $this->pole9 = $pole9;

        return $this;
    }

    /**
     * Get pole9
     *
     * @return string
     */
    public function getPole9()
    {
        return $this->pole9;
    }

    /**
     * Set pole10
     *
     * @param string $pole10
     *
     * @return Magazyn
     */
    public function setPole10($pole10)
    {
        $this->pole10 = $pole10;

        return $this;
    }

    /**
     * Get pole10
     *
     * @return string
     */
    public function getPole10()
    {
        return $this->pole10;
    }

    /**
     * Set remanentCzastkowy
     *
     * @param string $remanentCzastkowy
     *
     * @return Magazyn
     */
    public function setRemanentCzastkowy($remanentCzastkowy)
    {
        $this->remanentCzastkowy = $remanentCzastkowy;

        return $this;
    }

    /**
     * Get remanentCzastkowy
     *
     * @return string
     */
    public function getRemanentCzastkowy()
    {
        return $this->remanentCzastkowy;
    }

    /**
     * Set wspolnaNumIndeksow
     *
     * @param integer $wspolnaNumIndeksow
     *
     * @return Magazyn
     */
    public function setWspolnaNumIndeksow($wspolnaNumIndeksow)
    {
        $this->wspolnaNumIndeksow = $wspolnaNumIndeksow;

        return $this;
    }

    /**
     * Get wspolnaNumIndeksow
     *
     * @return integer
     */
    public function getWspolnaNumIndeksow()
    {
        return $this->wspolnaNumIndeksow;
    }

    /**
     * Set maskaIKatalog
     *
     * @param string $maskaIKatalog
     *
     * @return Magazyn
     */
    public function setMaskaIKatalog($maskaIKatalog)
    {
        $this->maskaIKatalog = $maskaIKatalog;

        return $this;
    }

    /**
     * Get maskaIKatalog
     *
     * @return string
     */
    public function getMaskaIKatalog()
    {
        return $this->maskaIKatalog;
    }

    /**
     * Set maskaIHandl
     *
     * @param string $maskaIHandl
     *
     * @return Magazyn
     */
    public function setMaskaIHandl($maskaIHandl)
    {
        $this->maskaIHandl = $maskaIHandl;

        return $this;
    }

    /**
     * Get maskaIHandl
     *
     * @return string
     */
    public function getMaskaIHandl()
    {
        return $this->maskaIHandl;
    }

    /**
     * Set wzorzecKatArtTree
     *
     * @param integer $wzorzecKatArtTree
     *
     * @return Magazyn
     */
    public function setWzorzecKatArtTree($wzorzecKatArtTree)
    {
        $this->wzorzecKatArtTree = $wzorzecKatArtTree;

        return $this;
    }

    /**
     * Get wzorzecKatArtTree
     *
     * @return integer
     */
    public function getWzorzecKatArtTree()
    {
        return $this->wzorzecKatArtTree;
    }
}
