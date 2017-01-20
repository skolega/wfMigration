<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FunduszPromocjiArtRolnych
 *
 * @ORM\Table(name="FUNDUSZ_PROMOCJI_ART_ROLNYCH")
 * @ORM\Entity
 */
class FunduszPromocjiArtRolnych
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FPROM", type="string", length=9, nullable=false)
     */
    private $idFprom;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROCENT_KWOTA", type="smallint", nullable=false)
     */
    private $procentKwota = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="decimal", precision=16, scale=4, nullable=false)
     */
    private $wartosc = '0.1';

    /**
     * @var string
     *
     * @ORM\Column(name="SKROT_JM", type="string", length=10, nullable=false)
     */
    private $skrotJm = '';


}

