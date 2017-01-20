<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagKartonTowar
 *
 * @ORM\Table(name="MAG_KARTON_TOWAR", indexes={@ORM\Index(name="UIDX_KARTON_INDEKS_KATALOGOWY", columns={"ID_KARTONU", "INDEKS_KATALOGOWY", "ID_ZAPISU"}), @ORM\Index(name="UIDX_KARTON_NAZWA", columns={"ID_KARTONU", "NAZWA_ARTYKULU", "ID_ZAPISU"}), @ORM\Index(name="UIDX_KARTON_KOD_KRESKOWY", columns={"ID_KARTONU", "KOD_KRESKOWY", "ID_ZAPISU"})})
 * @ORM\Entity
 */
class MagKartonTowar
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAPISU", type="string", length=9, nullable=false)
     */
    private $idZapisu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KARTONU", type="string", length=9, nullable=false)
     */
    private $idKartonu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=true)
     */
    private $kodKreskowy;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEKS_KATALOGOWY", type="string", length=50, nullable=true)
     */
    private $indeksKatalogowy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_ARTYKULU", type="string", length=100, nullable=true)
     */
    private $nazwaArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="decimal", precision=16, scale=4, nullable=false)
     */
    private $ilosc = '0';


}

