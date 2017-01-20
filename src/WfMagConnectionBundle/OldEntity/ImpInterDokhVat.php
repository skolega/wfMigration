<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpInterDokhVat
 *
 * @ORM\Table(name="IMP_INTER_DOKH_VAT")
 * @ORM\Entity
 */
class ImpInterDokhVat
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSAKCJI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idTransakcji;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_MK_ZRDANYCH", type="integer", nullable=true)
     */
    private $idMkZrdanych;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="NETTO", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $netto;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="NETTO_WAL", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $nettoWal;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_WAL", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $vatWal;

    /**
     * @var string
     *
     * @ORM\Column(name="KW_NABYCIA", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwNabycia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MARZA", type="smallint", nullable=true)
     */
    private $marza = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_VAT", type="integer", nullable=true)
     */
    private $dataVat;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_KURSU", type="integer", nullable=true)
     */
    private $dataKursu;

    /**
     * @var string
     *
     * @ORM\Column(name="KURS_VAT", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $kursVat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ODWROTNY", type="smallint", nullable=true)
     */
    private $odwrotny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ODWROTNY_TOWAR_USLUGA", type="string", length=1, nullable=true)
     */
    private $odwrotnyTowarUsluga;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_ORYG", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentuOryg;


}

