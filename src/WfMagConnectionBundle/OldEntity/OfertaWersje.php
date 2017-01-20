<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfertaWersje
 *
 * @ORM\Table(name="OFERTA_WERSJE", uniqueConstraints={@ORM\UniqueConstraint(name="AK_OFERTA_WERSJE_NR1", columns={"ID_OFERTY_NR1"})})
 * @ORM\Entity
 */
class OfertaWersje
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAPISU_WERSJI", type="string", length=9, nullable=false)
     */
    private $idZapisuWersji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OFERTY_NR1", type="string", length=9, nullable=false)
     */
    private $idOfertyNr1;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_OSTATNI", type="integer", nullable=false)
     */
    private $nrOstatni = '1';


}

