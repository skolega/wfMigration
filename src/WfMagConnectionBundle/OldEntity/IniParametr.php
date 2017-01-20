<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IniParametr
 *
 * @ORM\Table(name="INI_PARAMETR", indexes={@ORM\Index(name="INIPAR_IDOKNA", columns={"ID_OKNA", "DEFAULT_WART", "ID_PARAMETRU"})})
 * @ORM\Entity
 */
class IniParametr
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_PARAMETRU", type="string", length=9, nullable=false)
     */
    private $idParametru;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OKNA", type="string", length=9, nullable=true)
     */
    private $idOkna;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="DEFAULT_WART", type="string", length=50, nullable=false)
     */
    private $defaultWart;


}

