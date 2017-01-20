<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormaPlatnosci
 *
 * @ORM\Table(name="FORMA_PLATNOSCI")
 * @ORM\Entity
 */
class FormaPlatnosci
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FORMY", type="string", length=9, nullable=false)
     */
    private $idFormy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="SYSTEMOWY", type="string", length=1, nullable=true)
     */
    private $systemowy = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="DNI_NALEZNOSCI", type="integer", nullable=true)
     */
    private $dniNaleznosci = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DNI_ZOBOWIAZAN", type="integer", nullable=true)
     */
    private $dniZobowiazan = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="GEN_AUTO_ROZLICZ", type="smallint", nullable=true)
     */
    private $genAutoRozlicz = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="WLICZAJ_DO_LIMITU", type="smallint", nullable=true)
     */
    private $wliczajDoLimitu = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="TERMINAL", type="smallint", nullable=true)
     */
    private $terminal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=3, nullable=true)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="AKTYWNA", type="string", length=1, nullable=true)
     */
    private $aktywna = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PLATNIKA", type="string", length=9, nullable=true)
     */
    private $idPlatnika;


}

