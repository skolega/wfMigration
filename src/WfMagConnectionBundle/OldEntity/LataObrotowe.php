<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LataObrotowe
 *
 * @ORM\Table(name="LATA_OBROTOWE")
 * @ORM\Entity
 */
class LataObrotowe
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_LATA_OBROT", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idLataObrot;

    /**
     * @var string
     *
     * @ORM\Column(name="ROK_OBROTOWY", type="string", length=50, nullable=false)
     */
    private $rokObrotowy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=10, nullable=true)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="POCZATEK_ROKU", type="integer", nullable=true)
     */
    private $poczatekRoku;

    /**
     * @var integer
     *
     * @ORM\Column(name="KONIEC_ROKU", type="integer", nullable=true)
     */
    private $koniecRoku;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_ZAMKNIECIA", type="integer", nullable=true)
     */
    private $dataZamkniecia;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="ZAMKNIETY_OKRES", type="integer", nullable=true)
     */
    private $zamknietyOkres;

    /**
     * @var integer
     *
     * @ORM\Column(name="ZAMKNIETE_BO", type="smallint", nullable=true)
     */
    private $zamknieteBo;


}

