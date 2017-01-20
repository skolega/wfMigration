<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IntraKCn
 *
 * @ORM\Table(name="INTRA_K_CN")
 * @ORM\Entity
 */
class IntraKCn
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_CN", type="string", length=9, nullable=false)
     */
    private $idCn;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_CN", type="string", length=10, nullable=false)
     */
    private $kodCn;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=200, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY", type="string", length=1, nullable=false)
     */
    private $domyslny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="POSIADA_UZUP_JM", type="string", length=1, nullable=true)
     */
    private $posiadaUzupJm = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BRAK_MASY_NETTO", type="string", length=1, nullable=true)
     */
    private $brakMasyNetto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="JEST_W_DODAT_SL", type="string", length=1, nullable=true)
     */
    private $jestWDodatSl = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BRAK_WART_FAK", type="string", length=1, nullable=true)
     */
    private $brakWartFak = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BRAK_WART_STAT", type="string", length=1, nullable=true)
     */
    private $brakWartStat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WYMAGANA_WART_STAT", type="string", length=1, nullable=true)
     */
    private $wymaganaWartStat = '0';


}

