<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagOperacjeDodatkowe
 *
 * @ORM\Table(name="MAG_OPERACJE_DODATKOWE", uniqueConstraints={@ORM\UniqueConstraint(name="AK_PK_GRUPOWANIE_MAG_OPER", columns={"KOD_GRUPY", "GRUPOWANIE", "NAZWA"}), @ORM\UniqueConstraint(name="AK_KOD_OPERACJI_KOD_GRUPY", columns={"KOD_GRUPY", "KOD_OPERACJI"})})
 * @ORM\Entity
 */
class MagOperacjeDodatkowe
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_OPERACJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idOperacji;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_GRUPY", type="string", length=50, nullable=false)
     */
    private $kodGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="SKROT_KLAWISZOWY", type="string", length=30, nullable=true)
     */
    private $skrotKlawiszowy;

    /**
     * @var integer
     *
     * @ORM\Column(name="SKROT_KLAWISZOWY_KOD", type="integer", nullable=true)
     */
    private $skrotKlawiszowyKod;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_OPERACJI", type="string", length=20, nullable=false)
     */
    private $kodOperacji;

    /**
     * @var integer
     *
     * @ORM\Column(name="GRUPOWANIE", type="integer", nullable=false)
     */
    private $grupowanie = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="FUNKCJA_ZEWNETRZNA", type="smallint", nullable=true)
     */
    private $funkcjaZewnetrzna = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PARAMETRY", type="string", length=255, nullable=true)
     */
    private $parametry;

    /**
     * @var string
     *
     * @ORM\Column(name="SCIEZKA", type="string", length=260, nullable=true)
     */
    private $sciezka;

    /**
     * @var string
     *
     * @ORM\Column(name="INFO", type="string", length=200, nullable=true)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="ODSWIEZ_LISTE", type="string", length=1, nullable=true)
     */
    private $odswiezListe = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="KASUJ_ZAZNACZENIE", type="string", length=1, nullable=true)
     */
    private $kasujZaznaczenie = '0';


}

