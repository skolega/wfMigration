<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagikImpPozDok
 *
 * @ORM\Table(name="MAGIK_IMP_POZ_DOK", indexes={@ORM\Index(name="idx_MAGIK_IMP_POZ_DOK_IMP_ID_DOKUMENTU", columns={"IMP_ID_DOKUMENTU"})})
 * @ORM\Entity
 */
class MagikImpPozDok
{
    /**
     * @var string
     *
     * @ORM\Column(name="IMP_ID_DOKUMENTU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $impIdDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="IMP_ID_TRANSAKCJI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $impIdTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_ZAKUPU", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $wartoscZakupu;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $wartosc;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_ZAKUPU_BRUTTO", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $wartoscZakupuBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_BRUTTO", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $wartoscBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO_WALUTA", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $wartoscNettoWaluta;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_BRUTTO_WALUTA", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $wartoscBruttoWaluta;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_ZAKUPU_WALUTA", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $wartoscZakupuWaluta;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_ZAKUPU_BRUTTO_WALUTA", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $wartoscZakupuBruttoWaluta;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO_BEZ_KOSZTOW", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $wartoscNettoBezKosztow;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_BRUTTO_BEZ_KOSZTOW", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $wartoscBruttoBezKosztow;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_ZAKUPU_MARZA", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $wartoscZakupuMarza;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_POZYCJI", type="string", length=1, nullable=true)
     */
    private $rodzajPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var integer
     *
     * @ORM\Column(name="TYP_POZ_FIN", type="smallint", nullable=true)
     */
    private $typPozFin;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRozrachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="STRONA", type="string", length=2, nullable=true)
     */
    private $strona;

    /**
     * @var string
     *
     * @ORM\Column(name="STRONA_ROZRACHUNKU_POWIAZANEGO", type="string", length=2, nullable=true)
     */
    private $stronaRozrachunkuPowiazanego;

    /**
     * @var integer
     *
     * @ORM\Column(name="POZYCJA_ZALICZKA", type="smallint", nullable=true)
     */
    private $pozycjaZaliczka;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_POZYCJI", type="string", length=500, nullable=true)
     */
    private $opisPozycji;

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAJ_KOREKTY", type="smallint", nullable=true)
     */
    private $rodzajKorekty;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_OPERACJI", type="string", length=5, nullable=true)
     */
    private $kodOperacji;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_OPERACJI_FIN", type="string", length=50, nullable=true)
     */
    private $nazwaOperacjiFin;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_PLATNIKA", type="string", length=1, nullable=true)
     */
    private $typPlatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PLATNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPlatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DOK_FIN", type="string", length=5, nullable=true)
     */
    private $typDokFin;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal;

    /**
     * @var integer
     *
     * @ORM\Column(name="POZ_WAL_BAZOWE", type="smallint", nullable=true)
     */
    private $pozWalBazowe;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_FIN", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokFin;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_POLE1", type="string", length=100, nullable=true)
     */
    private $pozPole1;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_POLE2", type="string", length=100, nullable=true)
     */
    private $pozPole2;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_POLE3", type="string", length=100, nullable=true)
     */
    private $pozPole3;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_POLE4", type="string", length=100, nullable=true)
     */
    private $pozPole4;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_POLE5", type="string", length=100, nullable=true)
     */
    private $pozPole5;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_POLE6", type="string", length=100, nullable=true)
     */
    private $pozPole6;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_POLE7", type="string", length=100, nullable=true)
     */
    private $pozPole7;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_POLE8", type="string", length=100, nullable=true)
     */
    private $pozPole8;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_POLE9", type="string", length=100, nullable=true)
     */
    private $pozPole9;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_POLE10", type="string", length=100, nullable=true)
     */
    private $pozPole10;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_KASY", type="integer", nullable=true)
     */
    private $idKasy;

    /**
     * @var string
     *
     * @ORM\Column(name="SYMBOL_KASY", type="string", length=5, nullable=true)
     */
    private $symbolKasy;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_RACHUNKU", type="integer", nullable=true)
     */
    private $idRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_RACHUNKU", type="string", length=100, nullable=true)
     */
    private $numerRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOKF", type="string", length=30, nullable=true)
     */
    private $nrDokf;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_URZEDU", type="integer", nullable=true)
     */
    private $idUrzedu;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_DOK_FIN", type="integer", nullable=true)
     */
    private $dataDokFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="AKCYZA", type="smallint", nullable=true)
     */
    private $akcyza;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_AKCYZY", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $kwotaAkcyzy;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_CN", type="string", length=10, nullable=true)
     */
    private $kodCn;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOK_AKCYZY", type="string", length=30, nullable=true)
     */
    private $nrDokAkcyzy;


}

