<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RachunekWirtualnySchemat
 *
 * @ORM\Table(name="RACHUNEK_WIRTUALNY_SCHEMAT")
 * @ORM\Entity
 */
class RachunekWirtualnySchemat
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SCHEMATU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSchematu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRachunkuFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_SCHEMATU", type="string", length=50, nullable=true)
     */
    private $nazwaSchematu;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_BANKU", type="string", length=8, nullable=true)
     */
    private $numerBanku;

    /**
     * @var string
     *
     * @ORM\Column(name="CZLON_STALY", type="string", length=30, nullable=true)
     */
    private $czlonStaly;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOLEJNOSC", type="smallint", nullable=true)
     */
    private $kolejnosc;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_FUNKCJI", type="string", length=50, nullable=true)
     */
    private $nazwaFunkcji;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_DOMYSLNY", type="smallint", nullable=true)
     */
    private $czyDomyslny;


}

