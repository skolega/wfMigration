<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtykulImp
 *
 * @ORM\Table(name="ARTYKUL_IMP")
 * @ORM\Entity
 */
class ArtykulImp
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_REKORDU", type="string", length=9, nullable=false)
     */
    private $idRekordu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_BLOBA", type="string", length=9, nullable=false)
     */
    private $idBloba;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=1, nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=40, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA2", type="string", length=40, nullable=true)
     */
    private $nazwa2;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_ORYG", type="string", length=100, nullable=true)
     */
    private $nazwaOryg;

    /**
     * @var string
     *
     * @ORM\Column(name="KATEGORIA", type="string", length=50, nullable=false)
     */
    private $kategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="KATEGORIA_WIELOPOZIOMOWA", type="string", length=500, nullable=false)
     */
    private $kategoriaWielopoziomowa;

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA", type="string", length=10, nullable=false)
     */
    private $jednostka;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=10, nullable=false)
     */
    private $rodzaj;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_ZAKUPU", type="string", length=3, nullable=false)
     */
    private $vatZakupu;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_SPRZEDAZY", type="string", length=3, nullable=false)
     */
    private $vatSprzedazy;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEKS_KATALOGOWY", type="string", length=20, nullable=false)
     */
    private $indeksKatalogowy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="INDEKS_HANDLOWY", type="string", length=20, nullable=false)
     */
    private $indeksHandlowy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="WYROZNIK", type="string", length=50, nullable=true)
     */
    private $wyroznik = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LOKALIZACJA", type="string", length=30, nullable=true)
     */
    private $lokalizacja;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLU", type="integer", nullable=true)
     */
    private $plu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SWWKU", type="string", length=10, nullable=true)
     */
    private $swwku;

    /**
     * @var string
     *
     * @ORM\Column(name="PKWIU", type="string", length=14, nullable=true)
     */
    private $pkwiu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=true)
     */
    private $kodKreskowy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="STAN_MINIMALNY", type="string", length=9, nullable=true)
     */
    private $stanMinimalny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="STAN_MAKSYMALNY", type="string", length=9, nullable=true)
     */
    private $stanMaksymalny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_CERTYFIKATU", type="string", length=4, nullable=true)
     */
    private $dataCertyfikatu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_CERTYFIKATU", type="string", length=50, nullable=true)
     */
    private $nazwaCertyfikatu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="OSTRZEZENIE", type="string", length=500, nullable=true)
     */
    private $ostrzezenie;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=1000, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="KRAJ_POCHODZENIA", type="string", length=3, nullable=true)
     */
    private $krajPochodzenia;

    /**
     * @var string
     *
     * @ORM\Column(name="PRODUCENT", type="string", length=50, nullable=true)
     */
    private $producent;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_CN", type="string", length=20, nullable=true)
     */
    private $kodCn;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_INTRASTAT", type="string", length=50, nullable=true)
     */
    private $nazwaIntrastat = '';

    /**
     * @var string
     *
     * @ORM\Column(name="JED_WAGI", type="string", length=10, nullable=true)
     */
    private $jedWagi;

    /**
     * @var string
     *
     * @ORM\Column(name="WAGA", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $waga = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="JED_WYMIARU", type="string", length=10, nullable=true)
     */
    private $jedWymiaru;

    /**
     * @var string
     *
     * @ORM\Column(name="WYMIAR_W", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $wymiarW = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WYMIAR_S", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $wymiarS = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WYMIAR_G", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $wymiarG = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_ZAKUPU_NETTO", type="string", length=9, nullable=true)
     */
    private $cenaZakupuNetto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_ZAKUPU_BRUTTO", type="string", length=9, nullable=true)
     */
    private $cenaZakupuBrutto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="C_ZAKUPU_NETTO_WAL", type="string", length=9, nullable=true)
     */
    private $cZakupuNettoWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="C_ZAKUPU_BRUTTO_WAL", type="string", length=9, nullable=true)
     */
    private $cZakupuBruttoWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_N_KGO", type="string", length=9, nullable=true)
     */
    private $cenaNKgo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_B_KGO", type="string", length=9, nullable=true)
     */
    private $cenaBKgo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PROMOCJA_OD", type="string", length=4, nullable=true)
     */
    private $promocjaOd = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PROMOCJA_DO", type="string", length=4, nullable=true)
     */
    private $promocjaDo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_PROMOCJI_N", type="string", length=9, nullable=true)
     */
    private $cenaPromocjiN = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_PROMOCJI_B", type="string", length=9, nullable=true)
     */
    private $cenaPromocjiB = '0';

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


}

