<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Raport
 *
 * @ORM\Table(name="RAPORT", uniqueConstraints={@ORM\UniqueConstraint(name="AK_RAPORT_KOD_RAPORT", columns={"KOD"})}, indexes={@ORM\Index(name="RAPORT_IDWAR", columns={"ID_WARIANTU", "ID_RAPORTU"})})
 * @ORM\Entity
 */
class Raport
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAPORTU", type="string", length=9, nullable=false)
     */
    private $idRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_WARIANTU", type="string", length=9, nullable=true)
     */
    private $idWariantu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=50, nullable=false)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="WARIANTY", type="string", length=1, nullable=true)
     */
    private $warianty;

    /**
     * @var string
     *
     * @ORM\Column(name="CRYSTAL", type="string", length=1, nullable=true)
     */
    private $crystal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PLIK", type="string", length=260, nullable=true)
     */
    private $plik;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY_TN", type="string", length=1, nullable=true)
     */
    private $idFirmyTn;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU_TN", type="string", length=1, nullable=true)
     */
    private $idMagazynuTn;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_TN", type="string", length=1, nullable=true)
     */
    private $idDokumentuTn;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAKRES_OD_TN", type="string", length=1, nullable=true)
     */
    private $zakresOdTn;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAKRES_DO_TN", type="string", length=1, nullable=true)
     */
    private $zakresDoTn;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_ZAKRESU_TN", type="string", length=1, nullable=true)
     */
    private $opisZakresuTn;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR_BROWSERA_TN", type="string", length=1, nullable=true)
     */
    private $filtrBrowseraTn;

    /**
     * @var string
     *
     * @ORM\Column(name="ORDER_BROWSERA_TN", type="string", length=1, nullable=true)
     */
    private $orderBrowseraTn;

    /**
     * @var string
     *
     * @ORM\Column(name="PREFIX_ORDERA_TN", type="string", length=50, nullable=true)
     */
    private $prefixOrderaTn;

    /**
     * @var string
     *
     * @ORM\Column(name="IDENTYFIKATOR_W_RAPORCIE", type="string", length=100, nullable=true)
     */
    private $identyfikatorWRaporcie;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="DRUKUJTEKSTOWO", type="smallint", nullable=true)
     */
    private $drukujtekstowo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="STOPKA", type="smallint", nullable=true)
     */
    private $stopka = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR_SQL", type="string", length=3000, nullable=true)
     */
    private $filtrSql;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_TN", type="smallint", nullable=true)
     */
    private $dataTn = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PYTANIEODATE", type="string", length=100, nullable=true)
     */
    private $pytanieodate;

    /**
     * @var integer
     *
     * @ORM\Column(name="OrientacjaStrony", type="smallint", nullable=true)
     */
    private $orientacjastrony = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZAPISANY_DO_BAZY", type="string", length=1, nullable=true)
     */
    private $zapisanyDoBazy = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="OBRAZ_DLA_EDOK", type="integer", nullable=true)
     */
    private $obrazDlaEdok = '0';


}

