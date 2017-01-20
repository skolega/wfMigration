<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cena
 *
 * @ORM\Table(name="CENA", uniqueConstraints={@ORM\UniqueConstraint(name="AK_CENA_SEMAFOR_CENA", columns={"SEMAFOR", "ID_CENY"}), @ORM\UniqueConstraint(name="AK_ID_FIRMY_NAZWA_CENA", columns={"ID_FIRMY", "NAZWA"})}, indexes={@ORM\Index(name="CENA_IDFIR_IDCENY", columns={"ID_FIRMY", "ID_CENY"})})
 * @ORM\Entity
 */
class Cena
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENY", type="string", length=9, nullable=false)
     */
    private $idCeny;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=100, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="DLA_WSZYSTKICH", type="string", length=1, nullable=true)
     */
    private $dlaWszystkich;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=true)
     */
    private $semafor;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=1, nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENY_ZAL", type="string", length=9, nullable=true)
     */
    private $idCenyZal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAJ_ZAL", type="smallint", nullable=true)
     */
    private $rodzajZal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PROCENT_CENY_ZAL", type="string", length=5, nullable=true)
     */
    private $procentCenyZal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_CENY_ZAL", type="string", length=9, nullable=true)
     */
    private $kwotaCenyZal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ZAOKR_CENY_ZAL", type="integer", nullable=true)
     */
    private $zaokrCenyZal = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="AKT_CEN_PRZY_DOSTAWIE", type="string", length=1, nullable=true)
     */
    private $aktCenPrzyDostawie = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="KOLEJNOSC", type="string", length=9, nullable=true)
     */
    private $kolejnosc = '0';


}

