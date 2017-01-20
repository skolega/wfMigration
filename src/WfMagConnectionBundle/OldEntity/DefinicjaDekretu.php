<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefinicjaDekretu
 *
 * @ORM\Table(name="DEFINICJA_DEKRETU", indexes={@ORM\Index(name="DEF_POZDM_REL_TYP", columns={"ID_SCHEMATU", "DOKUMENT", "ID_TYPU"})})
 * @ORM\Entity
 */
class DefinicjaDekretu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozycji;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOKUMENT", type="smallint", nullable=true)
     */
    private $dokument;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=true)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_KATEGORII", type="string", length=50, nullable=true)
     */
    private $nazwaKategorii = '';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=9, nullable=true)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KLASYFIKACJI", type="string", length=9, nullable=true)
     */
    private $idKlasyfikacji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SCHEMATU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idSchematu;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_FK_WN", type="string", length=70, nullable=true)
     */
    private $kontoFkWn;

    /**
     * @var integer
     *
     * @ORM\Column(name="KARTOTEKA_WN", type="smallint", nullable=true)
     */
    private $kartotekaWn;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_FK_MA", type="string", length=70, nullable=true)
     */
    private $kontoFkMa;

    /**
     * @var integer
     *
     * @ORM\Column(name="KARTOTEKA_MA", type="smallint", nullable=true)
     */
    private $kartotekaMa;

    /**
     * @var string
     *
     * @ORM\Column(name="BRUTTO_NETTO", type="string", length=10, nullable=true)
     */
    private $bruttoNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAKUP_SPRZEDAZ", type="string", length=10, nullable=true)
     */
    private $zakupSprzedaz;

    /**
     * @var integer
     *
     * @ORM\Column(name="ODBIORCA_DOSTAWCA", type="smallint", nullable=true)
     */
    private $odbiorcaDostawca;

    /**
     * @var integer
     *
     * @ORM\Column(name="WARUNEK", type="smallint", nullable=true)
     */
    private $warunek;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_ARTYKULU", type="string", length=1, nullable=true)
     */
    private $rodzajArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_WARUNKU", type="string", length=300, nullable=true)
     */
    private $opisWarunku;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_DEKRETU", type="string", length=100, nullable=true)
     */
    private $opisDekretu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPTYMALIZACJA", type="string", length=1, nullable=true)
     */
    private $optymalizacja;

    /**
     * @var string
     *
     * @ORM\Column(name="KSIEGOWANIENIEZALEZNEDM", type="string", length=1, nullable=true)
     */
    private $ksiegowanieniezaleznedm = '0';

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
     * @ORM\Column(name="not_nazwa_kategorii", type="string", length=1, nullable=true)
     */
    private $notNazwaKategorii = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="not_rodzaj_artykulu", type="string", length=1, nullable=true)
     */
    private $notRodzajArtykulu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="not_kod_vat", type="string", length=1, nullable=true)
     */
    private $notKodVat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="not_id_klasyfikacji", type="string", length=1, nullable=true)
     */
    private $notIdKlasyfikacji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="not_id_grupy", type="string", length=1, nullable=true)
     */
    private $notIdGrupy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="not_odbiorca_dostawc", type="string", length=1, nullable=true)
     */
    private $notOdbiorcaDostawc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="formula", type="string", length=100, nullable=true)
     */
    private $formula;

    /**
     * @var integer
     *
     * @ORM\Column(name="not_odbiorca_dostawca", type="smallint", nullable=true)
     */
    private $notOdbiorcaDostawca = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PLATNIK_KONTRAHENT", type="string", length=1, nullable=true)
     */
    private $platnikKontrahent;

    /**
     * @var string
     *
     * @ORM\Column(name="POMIJAJ_UJEMNE", type="string", length=1, nullable=true)
     */
    private $pomijajUjemne;

    /**
     * @var integer
     *
     * @ORM\Column(name="VAT_PLATNIK_KONTRAHENT", type="smallint", nullable=true)
     */
    private $vatPlatnikKontrahent;


}

