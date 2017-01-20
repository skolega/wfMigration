<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KategoriaArtykulu
 *
 * @ORM\Table(name="KATEGORIA_ARTYKULU", uniqueConstraints={@ORM\UniqueConstraint(name="AK_KATEGORIA_SEMAFOR_KATEGORI", columns={"SEMAFOR", "ID_KATEGORII"}), @ORM\UniqueConstraint(name="AK_KATEGORIA_ART_IDMA_KATEGORI", columns={"ID_MAGAZYNU", "NAZWA"})}, indexes={@ORM\Index(name="KATART_IDMAG", columns={"ID_MAGAZYNU"}), @ORM\Index(name="KATART_IDCENDOM", columns={"ID_DOMYSLNEJ_CENY"}), @ORM\Index(name="GUID_KATEGORIA_INDEX", columns={"GUID_KATEGORIA"})})
 * @ORM\Entity
 */
class KategoriaArtykulu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII", type="string", length=9, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMER_DZIALU", type="integer", nullable=true)
     */
    private $numerDzialu;

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA_I_KATALOG", type="string", length=30, nullable=true)
     */
    private $maskaIKatalog;

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA_I_HANDL", type="string", length=30, nullable=true)
     */
    private $maskaIHandl;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOMYSLNEJ_CENY", type="string", length=9, nullable=true)
     */
    private $idDomyslnejCeny = '0';

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
     * @ORM\Column(name="KONTO_FK_KATEGORII", type="string", length=70, nullable=true)
     */
    private $kontoFkKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT_ZAK", type="string", length=3, nullable=true)
     */
    private $kodVatZak;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="GUID_KATEGORIA", type="uniqueidentifier", nullable=true)
     */
    private $guidKategoria = 'newid()';

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
     * @ORM\Column(name="DOMYSLNA", type="string", length=1, nullable=true)
     */
    private $domyslna = '0';



    /**
     * Get idKategorii
     *
     * @return string
     */
    public function getIdKategorii()
    {
        return $this->idKategorii;
    }

    /**
     * Set idMagazynu
     *
     * @param string $idMagazynu
     *
     * @return KategoriaArtykulu
     */
    public function setIdMagazynu($idMagazynu)
    {
        $this->idMagazynu = $idMagazynu;

        return $this;
    }

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
     * Set kodVat
     *
     * @param string $kodVat
     *
     * @return KategoriaArtykulu
     */
    public function setKodVat($kodVat)
    {
        $this->kodVat = $kodVat;

        return $this;
    }

    /**
     * Get kodVat
     *
     * @return string
     */
    public function getKodVat()
    {
        return $this->kodVat;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return KategoriaArtykulu
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
     * Set numerDzialu
     *
     * @param integer $numerDzialu
     *
     * @return KategoriaArtykulu
     */
    public function setNumerDzialu($numerDzialu)
    {
        $this->numerDzialu = $numerDzialu;

        return $this;
    }

    /**
     * Get numerDzialu
     *
     * @return integer
     */
    public function getNumerDzialu()
    {
        return $this->numerDzialu;
    }

    /**
     * Set maskaIKatalog
     *
     * @param string $maskaIKatalog
     *
     * @return KategoriaArtykulu
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
     * @return KategoriaArtykulu
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
     * Set idDomyslnejCeny
     *
     * @param string $idDomyslnejCeny
     *
     * @return KategoriaArtykulu
     */
    public function setIdDomyslnejCeny($idDomyslnejCeny)
    {
        $this->idDomyslnejCeny = $idDomyslnejCeny;

        return $this;
    }

    /**
     * Get idDomyslnejCeny
     *
     * @return string
     */
    public function getIdDomyslnejCeny()
    {
        return $this->idDomyslnejCeny;
    }

    /**
     * Set semafor
     *
     * @param string $semafor
     *
     * @return KategoriaArtykulu
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
     * @return KategoriaArtykulu
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
     * Set kontoFkKategorii
     *
     * @param string $kontoFkKategorii
     *
     * @return KategoriaArtykulu
     */
    public function setKontoFkKategorii($kontoFkKategorii)
    {
        $this->kontoFkKategorii = $kontoFkKategorii;

        return $this;
    }

    /**
     * Get kontoFkKategorii
     *
     * @return string
     */
    public function getKontoFkKategorii()
    {
        return $this->kontoFkKategorii;
    }

    /**
     * Set kodVatZak
     *
     * @param string $kodVatZak
     *
     * @return KategoriaArtykulu
     */
    public function setKodVatZak($kodVatZak)
    {
        $this->kodVatZak = $kodVatZak;

        return $this;
    }

    /**
     * Get kodVatZak
     *
     * @return string
     */
    public function getKodVatZak()
    {
        return $this->kodVatZak;
    }

    /**
     * Set guidKategoria
     *
     * @param uniqueidentifier $guidKategoria
     *
     * @return KategoriaArtykulu
     */
    public function setGuidKategoria($guidKategoria)
    {
        $this->guidKategoria = $guidKategoria;

        return $this;
    }

    /**
     * Get guidKategoria
     *
     * @return uniqueidentifier
     */
    public function getGuidKategoria()
    {
        return $this->guidKategoria;
    }

    /**
     * Set pole1
     *
     * @param string $pole1
     *
     * @return KategoriaArtykulu
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
     * @return KategoriaArtykulu
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
     * @return KategoriaArtykulu
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
     * @return KategoriaArtykulu
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
     * @return KategoriaArtykulu
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
     * @return KategoriaArtykulu
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
     * @return KategoriaArtykulu
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
     * @return KategoriaArtykulu
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
     * @return KategoriaArtykulu
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
     * @return KategoriaArtykulu
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
     * Set domyslna
     *
     * @param string $domyslna
     *
     * @return KategoriaArtykulu
     */
    public function setDomyslna($domyslna)
    {
        $this->domyslna = $domyslna;

        return $this;
    }

    /**
     * Get domyslna
     *
     * @return string
     */
    public function getDomyslna()
    {
        return $this->domyslna;
    }
}
