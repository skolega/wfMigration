<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproKontrolaParametry
 *
 * @ORM\Table(name="WAPRO_KONTROLA_PARAMETRY")
 * @ORM\Entity
 */
class WaproKontrolaParametry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="integer", nullable=false)
     */
    private $prgkod = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=30, nullable=false)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="string", length=100, nullable=true)
     */
    private $wartosc;


}

