<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IntraKTransakcji
 *
 * @ORM\Table(name="INTRA_K_TRANSAKCJI")
 * @ORM\Entity
 */
class IntraKTransakcji
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSAKCJI", type="string", length=9, nullable=false)
     */
    private $idTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_TRANSAKCJI", type="string", length=10, nullable=false)
     */
    private $kodTransakcji;

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
     * @ORM\Column(name="WYMAGANA_WART_STAT", type="string", length=1, nullable=true)
     */
    private $wymaganaWartStat = '0';


}

