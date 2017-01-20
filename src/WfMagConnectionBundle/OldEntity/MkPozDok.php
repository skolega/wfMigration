<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MkPozDok
 *
 * @ORM\Table(name="MK_POZ_DOK")
 * @ORM\Entity
 */
class MkPozDok
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozDok;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_NAG_DOK", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idNagDok;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_MA", type="string", length=50, nullable=true)
     */
    private $kontoMa;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_WN", type="string", length=50, nullable=true)
     */
    private $kontoWn;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_MA", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwotaMa;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_WN", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwotaWn;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_MA_W", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwotaMaW;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_WN_W", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwotaWnW;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WALUTY_WN", type="string", length=3, nullable=true)
     */
    private $symWalutyWn;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WALUTY_MA", type="string", length=3, nullable=true)
     */
    private $symWalutyMa;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_VAT", type="smallint", nullable=false)
     */
    private $czyVat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TRESC_POZ_DOK", type="string", length=100, nullable=true)
     */
    private $trescPozDok;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $kodKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU_MAG", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRozrachunkuMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZRODLA_DANYCH", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idZrodlaDanych;

    /**
     * @var string
     *
     * @ORM\Column(name="N_B", type="string", length=10, nullable=true)
     */
    private $nB;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAJ_DEKRETU", type="smallint", nullable=true)
     */
    private $rodzajDekretu;

    /**
     * @var string
     *
     * @ORM\Column(name="ZNACZNIK_TRANSAKCJI", type="string", length=30, nullable=true)
     */
    private $znacznikTransakcji;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROZRACH_PLN_WN", type="smallint", nullable=true)
     */
    private $rozrachPlnWn = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ROZRACH_PLN_MA", type="smallint", nullable=true)
     */
    private $rozrachPlnMa = '0';


}

