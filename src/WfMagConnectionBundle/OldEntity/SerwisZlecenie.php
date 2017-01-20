<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SerwisZlecenie
 *
 * @ORM\Table(name="SERWIS_ZLECENIE")
 * @ORM\Entity
 */
class SerwisZlecenie
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SERWIS_ZLECENIE", type="string", length=9, nullable=false)
     */
    private $idSerwisZlecenie;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SERWIS_ZLECENIE_TYP", type="string", length=9, nullable=false)
     */
    private $idSerwisZlecenieTyp;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=false)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_URZADZENIA", type="string", length=9, nullable=false)
     */
    private $idUrzadzenia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=false)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTAKTU", type="string", length=9, nullable=false)
     */
    private $idKontaktu;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=true)
     */
    private $numer;

    /**
     * @var integer
     *
     * @ORM\Column(name="AUTONUMER", type="integer", nullable=false)
     */
    private $autonumer = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=false)
     */
    private $kodKreskowy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_ZLECENIA", type="string", length=4, nullable=true)
     */
    private $dataZlecenia;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_ZEWNETRZNY", type="string", length=30, nullable=true)
     */
    private $nrZewnetrzny;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_PRZYJECIA", type="string", length=4, nullable=true)
     */
    private $dataPrzyjecia;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_ROZPOCZECIA", type="string", length=4, nullable=true)
     */
    private $dataRozpoczecia;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_ZAKONCZENIA", type="string", length=4, nullable=true)
     */
    private $dataZakonczenia;

    /**
     * @var integer
     *
     * @ORM\Column(name="GODZINA_ROZPOCZECIA", type="integer", nullable=true)
     */
    private $godzinaRozpoczecia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="GODZINA_ZAKONCZENIA", type="integer", nullable=true)
     */
    private $godzinaZakonczenia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_USTERKI", type="string", length=1000, nullable=true)
     */
    private $opisUsterki;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_NAPRAWIONE", type="smallint", nullable=true)
     */
    private $czyNaprawione = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_NAPRAWY", type="string", length=1000, nullable=true)
     */
    private $opisNaprawy;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_KOSZTORYS", type="smallint", nullable=true)
     */
    private $czyKosztorys;

    /**
     * @var integer
     *
     * @ORM\Column(name="GWARANCYJNE", type="smallint", nullable=true)
     */
    private $gwarancyjne;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_ZLECENIA", type="string", length=1, nullable=true)
     */
    private $statusZlecenia;

    /**
     * @var integer
     *
     * @ORM\Column(name="WYSYLAJ_SMS", type="smallint", nullable=true)
     */
    private $wysylajSms = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="REALIZACJA_PROCENT", type="integer", nullable=true)
     */
    private $realizacjaProcent = '0';

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
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="string", length=9, nullable=true)
     */
    private $idPracownika;

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
     * @ORM\Column(name="STAN_URZADZENIA", type="string", length=500, nullable=false)
     */
    private $stanUrzadzenia = '';

    /**
     * @var string
     *
     * @ORM\Column(name="WYPOSAZENIE_URZADZENIA", type="string", length=500, nullable=false)
     */
    private $wyposazenieUrzadzenia = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ZALECENIA_SERWISU", type="string", length=1000, nullable=false)
     */
    private $zaleceniaSerwisu = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZADANIA", type="string", length=9, nullable=false)
     */
    private $idZadania = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=1000, nullable=false)
     */
    private $uwagi = '';

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO", type="string", length=9, nullable=true)
     */
    private $wartoscNetto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_BRUTTO", type="string", length=9, nullable=true)
     */
    private $wartoscBrutto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETYKIETY", type="string", length=9, nullable=true)
     */
    private $idEtykiety = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ILE_DOKMAG", type="integer", nullable=true)
     */
    private $ileDokmag = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ILE_DOKHAN", type="integer", nullable=true)
     */
    private $ileDokhan = '0';


}

