<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KlasyfikatorAtrybut
 *
 * @ORM\Table(name="KLASYFIKATOR_ATRYBUT", uniqueConstraints={@ORM\UniqueConstraint(name="PO_TABELI_KOL", columns={"ID_TABELI", "KOLEJNOSC"}), @ORM\UniqueConstraint(name="PO_TABELI_NAZWIE", columns={"ID_TABELI", "NAZWA_SERWER"})}, indexes={@ORM\Index(name="IDX_24977EDFA7EE903", columns={"ID_TABELI"}), @ORM\Index(name="IDX_24977EDFC6D18138", columns={"ID_SLOWNIKA"})})
 * @ORM\Entity
 */
class KlasyfikatorAtrybut
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ATRYBUTU", type="string", length=9, nullable=false)
     */
    private $idAtrybutu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_SERWER", type="string", length=50, nullable=false)
     */
    private $nazwaSerwer;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DANYCH", type="string", length=20, nullable=true)
     */
    private $typDanych = 'tekst';

    /**
     * @var integer
     *
     * @ORM\Column(name="ROZMIAR", type="integer", nullable=false)
     */
    private $rozmiar;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRECYZJA", type="integer", nullable=true)
     */
    private $precyzja;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOLEJNOSC", type="integer", nullable=true)
     */
    private $kolejnosc;

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
     * @ORM\Column(name="CZY_WYMAGANE", type="string", length=1, nullable=true)
     */
    private $czyWymagane = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SYSTEMOWY", type="string", length=1, nullable=true)
     */
    private $systemowy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA", type="string", length=20, nullable=true)
     */
    private $maska = 's20';

    /**
     * @var string
     *
     * @ORM\Column(name="HASLOWANY", type="string", length=1, nullable=true)
     */
    private $haslowany = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FILTROWANY", type="string", length=1, nullable=true)
     */
    private $filtrowany = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="NIE_WIDOCZNY", type="string", length=1, nullable=true)
     */
    private $nieWidoczny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NIE_EDYTOWANY", type="string", length=1, nullable=true)
     */
    private $nieEdytowany = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PATH_APP_OBIEKTU", type="string", length=500, nullable=true)
     */
    private $pathAppObiektu;

    /**
     * @var integer
     *
     * @ORM\Column(name="GENERUJ_GNIAZDO", type="smallint", nullable=true)
     */
    private $generujGniazdo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WYROZNIK", type="string", length=50, nullable=true)
     */
    private $wyroznik = '&1) Dane podstawowe';

    /**
     * @var string
     *
     * @ORM\Column(name="NIE_SORTOWANY", type="string", length=1, nullable=true)
     */
    private $nieSortowany = '0';

    /**
     * @var \WfMagConnectionBundle\Entity\KlasyfikatorTabela
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\KlasyfikatorTabela")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TABELI", referencedColumnName="ID_TABELI")
     * })
     */
    private $idTabeli;

    /**
     * @var \WfMagConnectionBundle\Entity\KlasyfikatorSlownik
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\KlasyfikatorSlownik")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_SLOWNIKA", referencedColumnName="ID_SLOWNIKA")
     * })
     */
    private $idSlownika;


}

