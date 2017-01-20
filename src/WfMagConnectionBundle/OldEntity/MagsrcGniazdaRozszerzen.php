<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagsrcGniazdaRozszerzen
 *
 * @ORM\Table(name="MAGSRC_GNIAZDA_ROZSZERZEN", uniqueConstraints={@ORM\UniqueConstraint(name="IDX_MAGSRC_ID_GNIAZDA_NADRZ", columns={"ID_GNIAZDA_NADRZ", "ID_GNIAZDA"})}, indexes={@ORM\Index(name="IDX_MAGSRC_ID_GNIAZDA_RODZIC", columns={"ID_GNIAZDA_RODZIC"}), @ORM\Index(name="IDX_MAGSRC_KOLEJNOSC", columns={"KOLEJNOSC"}), @ORM\Index(name="IDX_MAGSRC_KODTREE", columns={"KOD_TREE"}), @ORM\Index(name="IDX_MAGSRC_NAZWA_ID_GNIAZDA_RODZIC", columns={"NAZWA", "ID_GNIAZDA_RODZIC"}), @ORM\Index(name="IDX_MAGSRC_NAZWA_SYS", columns={"NAZWA_SYS"})})
 * @ORM\Entity
 */
class MagsrcGniazdaRozszerzen
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_GNIAZDA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idGniazda;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTEKST", type="string", length=50, nullable=false)
     */
    private $kontekst = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_SYS", type="string", length=100, nullable=false)
     */
    private $nazwaSys = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_TECH", type="string", length=300, nullable=false)
     */
    private $nazwaTech = '';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=false)
     */
    private $opis = '';

    /**
     * @var string
     *
     * @ORM\Column(name="KOLEJNOSC", type="string", length=300, nullable=true)
     */
    private $kolejnosc;

    /**
     * @var integer
     *
     * @ORM\Column(name="POZIOM", type="integer", nullable=false)
     */
    private $poziom = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GNIAZDA_RODZIC", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idGniazdaRodzic;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GNIAZDA_NADRZ", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idGniazdaNadrz;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_TREE", type="string", length=300, nullable=true)
     */
    private $kodTree;

    /**
     * @var integer
     *
     * @ORM\Column(name="LP", type="integer", nullable=false)
     */
    private $lp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TYPY_FUNKCJI", type="string", length=50, nullable=false)
     */
    private $typyFunkcji = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TYPU", type="integer", nullable=false)
     */
    private $idTypu = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SQL_TRANSAKCJA", type="smallint", nullable=false)
     */
    private $sqlTransakcja = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SQL_W_PETLI", type="smallint", nullable=false)
     */
    private $sqlWPetli = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="GNIAZDO_FUNKCJA", type="smallint", nullable=false)
     */
    private $gniazdoFunkcja = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="SYS", type="smallint", nullable=false)
     */
    private $sys = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NIEAKTYWNE", type="smallint", nullable=false)
     */
    private $nieaktywne = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LISTA_PARAMETROW", type="string", length=1000, nullable=false)
     */
    private $listaParametrow = '';


}

