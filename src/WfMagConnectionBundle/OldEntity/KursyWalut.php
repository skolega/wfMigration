<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KursyWalut
 *
 * @ORM\Table(name="KURSY_WALUT", uniqueConstraints={@ORM\UniqueConstraint(name="AK_KURSYWALUT_DATA_WA_KURSY_WA", columns={"ID_DATY", "SYM_WALUTY"})})
 * @ORM\Entity
 */
class KursyWalut
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KURSU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKursu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DATY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDaty;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WALUTY", type="string", length=3, nullable=true)
     */
    private $symWaluty;

    /**
     * @var string
     *
     * @ORM\Column(name="KURS_ZAKUPU", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $kursZakupu;

    /**
     * @var string
     *
     * @ORM\Column(name="KURS_SPRZEDAZY", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $kursSprzedazy;

    /**
     * @var string
     *
     * @ORM\Column(name="KURS_SREDNI", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $kursSredni;


}

