<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefinicjaNumeracji
 *
 * @ORM\Table(name="DEFINICJA_NUMERACJI")
 * @ORM\Entity
 */
class DefinicjaNumeracji
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOKUMENT", type="smallint", nullable=false)
     */
    private $dokument;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=false)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZASOBU", type="string", length=9, nullable=false)
     */
    private $idZasobu;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMAT", type="string", length=50, nullable=false)
     */
    private $format;

    /**
     * @var integer
     *
     * @ORM\Column(name="OKRESNUMERACJI", type="smallint", nullable=false)
     */
    private $okresnumeracji;

    /**
     * @var string
     *
     * @ORM\Column(name="PARAMETR1", type="string", length=1, nullable=false)
     */
    private $parametr1;

    /**
     * @var string
     *
     * @ORM\Column(name="PARAMETR2", type="string", length=1, nullable=false)
     */
    private $parametr2;


}

