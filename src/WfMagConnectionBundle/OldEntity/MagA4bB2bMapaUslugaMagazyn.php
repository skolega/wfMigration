<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bB2bMapaUslugaMagazyn
 *
 * @ORM\Table(name="MAG_A4B_B2B_MAPA_USLUGA_MAGAZYN")
 * @ORM\Entity
 */
class MagA4bB2bMapaUslugaMagazyn
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_USLUGI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUslugi;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_USLUGI_VAT0", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUslugiVat0;


}

