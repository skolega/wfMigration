<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KlasyfikatorKolumnaIni
 *
 * @ORM\Table(name="KLASYFIKATOR_KOLUMNA_INI")
 * @ORM\Entity
 */
class KlasyfikatorKolumnaIni
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TABELI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idTabeli;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ATRYBUTU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idAtrybutu;

    /**
     * @var integer
     *
     * @ORM\Column(name="SZEROKOSC", type="integer", nullable=true)
     */
    private $szerokosc;


}

