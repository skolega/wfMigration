<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RaportKasBank
 *
 * @ORM\Table(name="RAPORT_KAS_BANK", indexes={@ORM\Index(name="RAPORT_KAS_BANK_IDR_RODZ", columns={"ID_RAP", "RODZAJ"})})
 * @ORM\Entity
 */
class RaportKasBank
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAP", type="string", length=9, nullable=false)
     */
    private $idRap;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACH_KAS", type="string", length=9, nullable=false)
     */
    private $idRachKas;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=1, nullable=true)
     */
    private $rodzaj;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=false)
     */
    private $numer;

    /**
     * @var string
     *
     * @ORM\Column(name="AUTONUMER", type="string", length=9, nullable=true)
     */
    private $autonumer;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_OD", type="string", length=4, nullable=true)
     */
    private $dataOd;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_DO", type="string", length=4, nullable=true)
     */
    private $dataDo;

    /**
     * @var string
     *
     * @ORM\Column(name="SALDO_OTWARCIA", type="string", length=9, nullable=true)
     */
    private $saldoOtwarcia;

    /**
     * @var string
     *
     * @ORM\Column(name="WPLYW", type="string", length=9, nullable=true)
     */
    private $wplyw;

    /**
     * @var string
     *
     * @ORM\Column(name="WYPLYW", type="string", length=9, nullable=true)
     */
    private $wyplyw;

    /**
     * @var string
     *
     * @ORM\Column(name="SALDO_KONCOWE", type="string", length=9, nullable=true)
     */
    private $saldoKoncowe;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=true)
     */
    private $idTypu;

    /**
     * @var integer
     *
     * @ORM\Column(name="LICZNIK", type="integer", nullable=true)
     */
    private $licznik = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_OPERACJI", type="string", length=1, nullable=true)
     */
    private $rodzajOperacji = 'k';


}

