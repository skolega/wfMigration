<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtykulWiazany
 *
 * @ORM\Table(name="ARTYKUL_WIAZANY")
 * @ORM\Entity
 */
class ArtykulWiazany
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_WIAZANIA", type="string", length=9, nullable=false)
     */
    private $idWiazania;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU_WIAZ", type="string", length=9, nullable=true)
     */
    private $idArtykuluWiaz;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=false)
     */
    private $ilosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC_MIN", type="string", length=9, nullable=false)
     */
    private $iloscMin;

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA_WIAZ", type="string", length=10, nullable=true)
     */
    private $jednostkaWiaz;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC_WIAZ", type="string", length=9, nullable=true)
     */
    private $iloscWiaz;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WIAZ", type="string", length=9, nullable=true)
     */
    private $przelicznikWiaz;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAOKRAGLENIE", type="string", length=1, nullable=true)
     */
    private $zaokraglenie = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=1, nullable=true)
     */
    private $rodzaj = 'T';


}

