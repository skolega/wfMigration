<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IniKolumna
 *
 * @ORM\Table(name="INI_KOLUMNA", indexes={@ORM\Index(name="INIKOL_IDOKNA", columns={"ID_OKNA", "ID_KOLUMNY"})})
 * @ORM\Entity
 */
class IniKolumna
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_OKNA", type="string", length=9, nullable=false)
     */
    private $idOkna;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KOLUMNY", type="string", length=9, nullable=false)
     */
    private $idKolumny;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_KOLUMNY", type="string", length=50, nullable=false)
     */
    private $nazwaKolumny;

    /**
     * @var string
     *
     * @ORM\Column(name="ROZMIAR_KOLUMNY", type="string", length=9, nullable=true)
     */
    private $rozmiarKolumny;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_KOLUMNY", type="string", length=9, nullable=true)
     */
    private $numerKolumny;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMAT_KOLUMNY", type="string", length=200, nullable=true)
     */
    private $formatKolumny;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE_DODATKOWE", type="string", length=1, nullable=true)
     */
    private $poleDodatkowe = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="UKRYTA", type="smallint", nullable=true)
     */
    private $ukryta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PODLEGA_OBCIECIU", type="smallint", nullable=true)
     */
    private $podlegaObcieciu = '0';


}

