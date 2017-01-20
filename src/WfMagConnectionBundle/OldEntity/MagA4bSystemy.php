<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bSystemy
 *
 * @ORM\Table(name="MAG_A4B_SYSTEMY", uniqueConstraints={@ORM\UniqueConstraint(name="UIDX_MAG_A4B_SYSTEMY_IdentyfikatorA4B", columns={"IdentyfikatorA4B"})})
 * @ORM\Entity
 */
class MagA4bSystemy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_A4B", type="integer", nullable=false)
     */
    private $idA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Systemu", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSystemu;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Firmy", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Magazynu", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Kasy", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKasy;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ceny", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idCeny;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Uzytkownika", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Grupy", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Klasyfikacji", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKlasyfikacji;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Uslugi", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUslugi;

    /**
     * @var integer
     *
     * @ORM\Column(name="StatusyZwrotne", type="smallint", nullable=false)
     */
    private $statusyzwrotne = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="RezerwacjaZam", type="smallint", nullable=false)
     */
    private $rezerwacjazam = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="OkresRozrachunkow", type="integer", nullable=false)
     */
    private $okresrozrachunkow = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NazwaBazy", type="string", length=100, nullable=true)
     */
    private $nazwabazy;

    /**
     * @var string
     *
     * @ORM\Column(name="NazwaSerwera", type="string", length=500, nullable=true)
     */
    private $nazwaserwera;

    /**
     * @var string
     *
     * @ORM\Column(name="WersjaBazy", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $wersjabazy;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="GUIDBazy", type="uniqueidentifier", nullable=true)
     */
    private $guidbazy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataRejestracji", type="datetime", nullable=false)
     */
    private $datarejestracji;

    /**
     * @var integer
     *
     * @ORM\Column(name="Aktywny", type="smallint", nullable=false)
     */
    private $aktywny;

    /**
     * @var integer
     *
     * @ORM\Column(name="Blokada", type="smallint", nullable=false)
     */
    private $blokada;

    /**
     * @var string
     *
     * @ORM\Column(name="TypSystemu", type="string", length=20, nullable=false)
     */
    private $typsystemu;

    /**
     * @var string
     *
     * @ORM\Column(name="IdentyfikatorA4B", type="string", length=200, nullable=false)
     */
    private $identyfikatora4b;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="GUIDTransmisji", type="uniqueidentifier", nullable=true)
     */
    private $guidtransmisji;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataZmianyWersjiKomunikatow", type="datetime", nullable=true)
     */
    private $datazmianywersjikomunikatow;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_Uslugi_VAT0", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUslugiVat0 = '0';


}

