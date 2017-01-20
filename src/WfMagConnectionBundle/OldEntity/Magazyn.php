<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Magazyn
 *
 * @ORM\Table(name="MAGAZYN", uniqueConstraints={@ORM\UniqueConstraint(name="AK_FIRMA_SYMBOL_NAZWA_MAGAZYN", columns={"ID_FIRMY", "SYMBOL", "NAZWA"}), @ORM\UniqueConstraint(name="MAGAZYN_NAZWA", columns={"ID_MAGAZYNU", "NAZWA"})}, indexes={@ORM\Index(name="MAGAZYN_WYROZNIK_SYNCHRO", columns={"WYROZNIK_SYNCHRONIZACJI"})})
 * @ORM\Entity
 */
class Magazyn
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idMagazynu;

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
     * @ORM\Column(name="SYMBOL", type="string", length=10, nullable=false)
     */
    private $symbol;

    /**
     * @var string
     *
     * @ORM\Column(name="LOKALIZACJA", type="string", length=100, nullable=true)
     */
    private $lokalizacja;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=200, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="STAN_MAGAZYNU", type="string", length=10, nullable=true)
     */
    private $stanMagazynu = 'Praca';

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_FK_MAGAZYNU", type="string", length=70, nullable=true)
     */
    private $kontoFkMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_FK_OPAKOWAN", type="string", length=70, nullable=true)
     */
    private $kontoFkOpakowan;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_FK_TOWWDRODZE", type="string", length=70, nullable=true)
     */
    private $kontoFkTowwdrodze;

    /**
     * @var string
     *
     * @ORM\Column(name="NAGLOWEK", type="string", length=500, nullable=true)
     */
    private $naglowek;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCE_WYSTAWIENIA", type="string", length=50, nullable=true)
     */
    private $miejsceWystawienia;

    /**
     * @var string
     *
     * @ORM\Column(name="WYROZNIK_SYNCHRONIZACJI", type="string", length=20, nullable=false)
     */
    private $wyroznikSynchronizacji = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="string", length=9, nullable=false)
     */
    private $idRachunku = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="POLE1", type="string", length=100, nullable=true)
     */
    private $pole1;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE2", type="string", length=100, nullable=true)
     */
    private $pole2;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE3", type="string", length=100, nullable=true)
     */
    private $pole3;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE4", type="string", length=100, nullable=true)
     */
    private $pole4;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE5", type="string", length=100, nullable=true)
     */
    private $pole5;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE6", type="string", length=100, nullable=true)
     */
    private $pole6;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE7", type="string", length=100, nullable=true)
     */
    private $pole7;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE8", type="string", length=100, nullable=true)
     */
    private $pole8;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE9", type="string", length=100, nullable=true)
     */
    private $pole9;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE10", type="string", length=100, nullable=true)
     */
    private $pole10;

    /**
     * @var string
     *
     * @ORM\Column(name="REMANENT_CZASTKOWY", type="string", length=1, nullable=true)
     */
    private $remanentCzastkowy = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="WSPOLNA_NUM_INDEKSOW", type="smallint", nullable=true)
     */
    private $wspolnaNumIndeksow = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA_I_KATALOG", type="string", length=30, nullable=true)
     */
    private $maskaIKatalog = '';

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA_I_HANDL", type="string", length=30, nullable=true)
     */
    private $maskaIHandl = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="WZORZEC_KAT_ART_TREE", type="smallint", nullable=true)
     */
    private $wzorzecKatArtTree = '0';


}

