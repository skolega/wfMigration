<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KlasyfikatorPole
 *
 * @ORM\Table(name="KLASYFIKATOR_POLE", uniqueConstraints={@ORM\UniqueConstraint(name="AK_PO_GRUPIE_I_POLU_KLASYFIK", columns={"KOD_KLAS_GRUPY", "NAZWA_POLA"})}, indexes={@ORM\Index(name="PO_GRUPIE_I_NR", columns={"KOD_KLAS_GRUPY", "NUMER_POLA"})})
 * @ORM\Entity
 */
class KlasyfikatorPole
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POLA", type="string", length=9, nullable=false)
     */
    private $idPola;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KLAS_GRUPY", type="string", length=30, nullable=false)
     */
    private $kodKlasGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SLOWNIKA", type="string", length=9, nullable=true)
     */
    private $idSlownika;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_POLA", type="string", length=50, nullable=false)
     */
    private $nazwaPola;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_POLA_MAP", type="string", length=50, nullable=false)
     */
    private $nazwaPolaMap;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DANYCH", type="string", length=20, nullable=true)
     */
    private $typDanych = 'tekst';

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMER_POLA", type="integer", nullable=true)
     */
    private $numerPola;

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA_POLA", type="string", length=20, nullable=true)
     */
    private $maskaPola = 's20';

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_POLA", type="string", length=1, nullable=true)
     */
    private $typPola = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSCI_LISTY", type="string", length=200, nullable=true)
     */
    private $wartosciListy;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_DOMYSLNA", type="string", length=100, nullable=true)
     */
    private $wartoscDomyslna;

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_AKTYWNE", type="string", length=1, nullable=true)
     */
    private $czyAktywne = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_WYMAGANE", type="string", length=1, nullable=true)
     */
    private $czyWymagane = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PROC_NAZWA", type="string", length=100, nullable=true)
     */
    private $procNazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="PROC_ID_DOKUMENTU", type="string", length=1, nullable=true)
     */
    private $procIdDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="PATH_APP_OBIEKTU", type="string", length=500, nullable=true)
     */
    private $pathAppObiektu;

    /**
     * @var string
     *
     * @ORM\Column(name="NIE_EDYTOWANY", type="string", length=1, nullable=true)
     */
    private $nieEdytowany = '0';


}

