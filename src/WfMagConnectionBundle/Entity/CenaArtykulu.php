<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CenaArtykulu
 *
 * @ORM\Table(name="CENA_ARTYKULU", uniqueConstraints={@ORM\UniqueConstraint(name="UIDX_ID_CENA_ARTYKULU", columns={"ID_CENA_ARTYKULU"})}, indexes={@ORM\Index(name="CENART_INDEX1", columns={"ID_ARTYKULU", "ID_CENY", "SYM_WAL", "CENA_NETTO", "CENA_BRUTTO"}), @ORM\Index(name="CENA_ARTYKULU_SKLEP", columns={"ID_ARTYKULU", "PRZELICZNIK_WAL", "OBL_WG_CEN_ZAK", "CENA_NETTO", "CENA_BRUTTO", "UWAGI", "AKT_CEN_PRZY_DOSTAWIE", "ID_CENA_ARTYKULU", "ID_CENY"})})
 * @ORM\Entity
 */
class CenaArtykulu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENY", type="string", length=9, nullable=false)
     */
    private $idCeny;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $przelicznikWal = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="OBL_WG_CEN_ZAK", type="string", length=1, nullable=true)
     */
    private $oblWgCenZak = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO", type="string", length=9, nullable=true)
     */
    private $cenaNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO", type="string", length=9, nullable=true)
     */
    private $cenaBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=50, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="AKT_CEN_PRZY_DOSTAWIE", type="string", length=1, nullable=true)
     */
    private $aktCenPrzyDostawie = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENA_ARTYKULU", type="decimal", precision=18, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCenaArtykulu;



    /**
     * Set idArtykulu
     *
     * @param string $idArtykulu
     *
     * @return CenaArtykulu
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
     * Set idCeny
     *
     * @param string $idCeny
     *
     * @return CenaArtykulu
     */
    public function setIdCeny($idCeny)
    {
        $this->idCeny = $idCeny;

        return $this;
    }

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
     * Set symWal
     *
     * @param string $symWal
     *
     * @return CenaArtykulu
     */
    public function setSymWal($symWal)
    {
        $this->symWal = $symWal;

        return $this;
    }

    /**
     * Get symWal
     *
     * @return string
     */
    public function getSymWal()
    {
        return $this->symWal;
    }

    /**
     * Set przelicznikWal
     *
     * @param string $przelicznikWal
     *
     * @return CenaArtykulu
     */
    public function setPrzelicznikWal($przelicznikWal)
    {
        $this->przelicznikWal = $przelicznikWal;

        return $this;
    }

    /**
     * Get przelicznikWal
     *
     * @return string
     */
    public function getPrzelicznikWal()
    {
        return $this->przelicznikWal;
    }

    /**
     * Set oblWgCenZak
     *
     * @param string $oblWgCenZak
     *
     * @return CenaArtykulu
     */
    public function setOblWgCenZak($oblWgCenZak)
    {
        $this->oblWgCenZak = $oblWgCenZak;

        return $this;
    }

    /**
     * Get oblWgCenZak
     *
     * @return string
     */
    public function getOblWgCenZak()
    {
        return $this->oblWgCenZak;
    }

    /**
     * Set cenaNetto
     *
     * @param string $cenaNetto
     *
     * @return CenaArtykulu
     */
    public function setCenaNetto($cenaNetto)
    {
        $this->cenaNetto = $cenaNetto;

        return $this;
    }

    /**
     * Get cenaNetto
     *
     * @return string
     */
    public function getCenaNetto()
    {
        return $this->cenaNetto;
    }

    /**
     * Set cenaBrutto
     *
     * @param string $cenaBrutto
     *
     * @return CenaArtykulu
     */
    public function setCenaBrutto($cenaBrutto)
    {
        $this->cenaBrutto = $cenaBrutto;

        return $this;
    }

    /**
     * Get cenaBrutto
     *
     * @return string
     */
    public function getCenaBrutto()
    {
        return $this->cenaBrutto;
    }

    /**
     * Set uwagi
     *
     * @param string $uwagi
     *
     * @return CenaArtykulu
     */
    public function setUwagi($uwagi)
    {
        $this->uwagi = $uwagi;

        return $this;
    }

    /**
     * Get uwagi
     *
     * @return string
     */
    public function getUwagi()
    {
        return $this->uwagi;
    }

    /**
     * Set aktCenPrzyDostawie
     *
     * @param string $aktCenPrzyDostawie
     *
     * @return CenaArtykulu
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
     * Get idCenaArtykulu
     *
     * @return string
     */
    public function getIdCenaArtykulu()
    {
        return $this->idCenaArtykulu;
    }
}
