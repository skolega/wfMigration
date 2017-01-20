<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blokada
 *
 * @ORM\Table(name="BLOKADA")
 * @ORM\Entity
 */
class Blokada
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_BLOKADY", type="string", length=9, nullable=false)
     */
    private $idBlokady;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=false)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHKAS", type="string", length=9, nullable=false)
     */
    private $idRachkas;

    /**
     * @var string
     *
     * @ORM\Column(name="OSTATNIA_DATA", type="string", length=4, nullable=true)
     */
    private $ostatniaData;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal = '';


}

