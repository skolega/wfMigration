<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatyKursow
 *
 * @ORM\Table(name="DATY_KURSOW", uniqueConstraints={@ORM\UniqueConstraint(name="AK_DATYKURSOW_IDBANK__DATY_KUR", columns={"ID_BANKU", "DATA_NOT", "GODZ_NOT"})})
 * @ORM\Entity
 */
class DatyKursow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DATY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDaty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_BANKU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idBanku;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_NOT", type="integer", nullable=true)
     */
    private $dataNot;

    /**
     * @var integer
     *
     * @ORM\Column(name="GODZ_NOT", type="integer", nullable=true)
     */
    private $godzNot;


}

