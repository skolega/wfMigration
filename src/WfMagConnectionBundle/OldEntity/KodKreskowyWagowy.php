<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KodKreskowyWagowy
 *
 * @ORM\Table(name="KOD_KRESKOWY_WAGOWY")
 * @ORM\Entity
 */
class KodKreskowyWagowy
{
    /**
     * @var string
     *
     * @ORM\Column(name="PREFIKS", type="string", length=2, nullable=false)
     */
    private $prefiks;

    /**
     * @var integer
     *
     * @ORM\Column(name="DLUGOSC", type="smallint", nullable=false)
     */
    private $dlugosc;

    /**
     * @var integer
     *
     * @ORM\Column(name="TYP", type="smallint", nullable=false)
     */
    private $typ = '2';

    /**
     * @var integer
     *
     * @ORM\Column(name="N_PLU", type="smallint", nullable=false)
     */
    private $nPlu = '4';

    /**
     * @var string
     *
     * @ORM\Column(name="STRUKTURA", type="string", length=255, nullable=true)
     */
    private $struktura;

    /**
     * @var integer
     *
     * @ORM\Column(name="AKTYWNY", type="smallint", nullable=true)
     */
    private $aktywny;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy;


}

