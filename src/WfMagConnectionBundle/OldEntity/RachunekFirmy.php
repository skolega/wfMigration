<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RachunekFirmy
 *
 * @ORM\Table(name="RACHUNEK_FIRMY", uniqueConstraints={@ORM\UniqueConstraint(name="AK_RACHUNEKFIRMY_IDFI_RACHUNEK", columns={"ID_FIRMY", "NUMER_RACHUNKU"})})
 * @ORM\Entity
 */
class RachunekFirmy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_BANKU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idBanku;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WALUTY", type="string", length=3, nullable=true)
     */
    private $symWaluty;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_RACHUNKU", type="string", length=100, nullable=false)
     */
    private $numerRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="LK", type="string", length=2, nullable=true)
     */
    private $lk;

    /**
     * @var integer
     *
     * @ORM\Column(name="AKTYWNY", type="smallint", nullable=true)
     */
    private $aktywny;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOD_RACHUNKU", type="integer", nullable=true)
     */
    private $kodRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_FK", type="string", length=70, nullable=true)
     */
    private $kontoFk;

    /**
     * @var string
     *
     * @ORM\Column(name="RAP_WALUTOWE", type="string", length=1, nullable=true)
     */
    private $rapWalutowe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY_WAL", type="string", length=1, nullable=true)
     */
    private $domyslnyWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_KRAJU", type="string", length=3, nullable=true)
     */
    private $symKraju = 'PL';


}

