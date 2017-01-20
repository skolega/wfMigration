<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdRodzajDanychBinarnych
 *
 * @ORM\Table(name="ZD_RODZAJ_DANYCH_BINARNYCH", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_ZD_RODZAJ_DANYCH_BINARNYCH", columns={"KOD"})})
 * @ORM\Entity
 */
class ZdRodzajDanychBinarnych
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_RODZAJU_DANYCH_BINARNYCH", type="integer", nullable=false)
     */
    private $idRodzajuDanychBinarnych;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=64, nullable=false)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="ROZSZERZENIE", type="string", length=16, nullable=false)
     */
    private $rozszerzenie;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=256, nullable=false)
     */
    private $nazwa;


}

