<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproFunkcjaKontroli
 *
 * @ORM\Table(name="WAPRO_FUNKCJA_KONTROLI", indexes={@ORM\Index(name="IDX_WAPRO_FUNKCJA_KONTROLI_NAZWA", columns={"NAZWA", "PRGKOD"}), @ORM\Index(name="IDX_WAPRO_FUNKCJA_KONTROLI_IDKAT", columns={"ID_KATEGORII"}), @ORM\Index(name="IDX_WAPRO_FUNKCJA_KONTROLI_PRGKOD", columns={"PRGKOD"})})
 * @ORM\Entity
 */
class WaproFunkcjaKontroli
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FUNKCJI_KONTROLI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFunkcjiKontroli;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_PROCEDURY", type="string", length=100, nullable=false)
     */
    private $nazwaProcedury;

    /**
     * @var integer
     *
     * @ORM\Column(name="LP", type="integer", nullable=false)
     */
    private $lp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SYSFUNC", type="smallint", nullable=false)
     */
    private $sysfunc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="integer", nullable=false)
     */
    private $prgkod = '0';


}

