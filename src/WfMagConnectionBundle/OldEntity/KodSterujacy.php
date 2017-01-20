<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KodSterujacy
 *
 * @ORM\Table(name="KOD_STERUJACY")
 * @ORM\Entity
 */
class KodSterujacy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KODU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKodu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DRUKARKI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDrukarki;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_KODU", type="string", length=50, nullable=false)
     */
    private $nazwaKodu;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_DOMYSLNA", type="string", length=9, nullable=true)
     */
    private $wartoscDomyslna = '000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA", type="string", length=20, nullable=true)
     */
    private $maska = '@P###-###-###P';


}

