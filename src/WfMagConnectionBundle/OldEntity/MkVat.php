<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MkVat
 *
 * @ORM\Table(name="MK_VAT")
 * @ORM\Entity
 */
class MkVat
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_VAT", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idVat;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_LATA_OBROT", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idLataObrot;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_STAWKI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idStawki;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_NAG_DOK", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idNagDok;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AUT_NAG", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idAutNag;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_OKRESU", type="integer", nullable=true)
     */
    private $dataOkresu;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_REJESTRU", type="string", length=1, nullable=true)
     */
    private $typRejestru;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $kodKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="SYMBOL_KARTOTEKI", type="string", length=10, nullable=true)
     */
    private $symbolKartoteki;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=200, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES", type="string", length=100, nullable=true)
     */
    private $adres;

    /**
     * @var string
     *
     * @ORM\Column(name="NIP", type="string", length=20, nullable=true)
     */
    private $nip;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_INC", type="smallint", nullable=true)
     */
    private $czyInc;

    /**
     * @var string
     *
     * @ORM\Column(name="KW_NETTO", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="KW_BRUTTO", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="KW_PODATKU", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwPodatku;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_SPRZEDAZ_ART21D", type="smallint", nullable=true)
     */
    private $czySprzedazArt21d;

    /**
     * @var string
     *
     * @ORM\Column(name="CECHA1", type="string", length=10, nullable=true)
     */
    private $cecha1;

    /**
     * @var string
     *
     * @ORM\Column(name="CECHA2", type="string", length=10, nullable=true)
     */
    private $cecha2;

    /**
     * @var string
     *
     * @ORM\Column(name="CECHA3", type="string", length=10, nullable=true)
     */
    private $cecha3;

    /**
     * @var string
     *
     * @ORM\Column(name="CECHA4", type="string", length=10, nullable=true)
     */
    private $cecha4;

    /**
     * @var string
     *
     * @ORM\Column(name="ZBIOR_ELEMENTOW", type="string", length=100, nullable=true)
     */
    private $zbiorElementow;

    /**
     * @var string
     *
     * @ORM\Column(name="KW_NETTO_W", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $kwNettoW;

    /**
     * @var string
     *
     * @ORM\Column(name="KW_BRUTTO_W", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $kwBruttoW;

    /**
     * @var string
     *
     * @ORM\Column(name="KW_PODATKU_W", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $kwPodatkuW;

    /**
     * @var integer
     *
     * @ORM\Column(name="MNOZNIK", type="integer", nullable=true)
     */
    private $mnoznik;

    /**
     * @var string
     *
     * @ORM\Column(name="KURS_WALUTY", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $kursWaluty;

    /**
     * @var string
     *
     * @ORM\Column(name="KURS_WALUTY_D", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $kursWalutyD;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal;

    /**
     * @var integer
     *
     * @ORM\Column(name="ODLICZENIE", type="smallint", nullable=true)
     */
    private $odliczenie = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ZNACZNIK_2", type="smallint", nullable=true)
     */
    private $znacznik2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=100, nullable=true)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_VAT", type="integer", nullable=true)
     */
    private $dataVat;


}

