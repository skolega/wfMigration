<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RapWalKasBank
 *
 * @ORM\Table(name="RAP_WAL_KAS_BANK", uniqueConstraints={@ORM\UniqueConstraint(name="RAP_WAL_KAS_BANK_SYMWAL", columns={"ID_RAP", "SYM_WAL"})}, indexes={@ORM\Index(name="RAP_WAL_KAS_BANK_ID_TYP", columns={"ID_RAP"})})
 * @ORM\Entity
 */
class RapWalKasBank
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAP_WAL", type="string", length=9, nullable=false)
     */
    private $idRapWal;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAP", type="string", length=9, nullable=false)
     */
    private $idRap;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal = '';

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
     * @ORM\Column(name="SALDO_OTWARCIA_WAL_BAZ", type="string", length=9, nullable=true)
     */
    private $saldoOtwarciaWalBaz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WPLYW_WAL_BAZ", type="string", length=9, nullable=true)
     */
    private $wplywWalBaz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WYPLYW_WAL_BAZ", type="string", length=9, nullable=true)
     */
    private $wyplywWalBaz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SALDO_KONCOWE_WAL_BAZ", type="string", length=9, nullable=true)
     */
    private $saldoKoncoweWalBaz = '0';


}

