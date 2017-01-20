<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MkKontrahent
 *
 * @ORM\Table(name="MK_KONTRAHENT", indexes={@ORM\Index(name="MKKONTRAHENT_IDTRANS_KODKONTR", columns={"ID_TRANSAKCJI", "KOD_KONTRAHENTA"})})
 * @ORM\Entity
 */
class MkKontrahent
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSAKCJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TABELI_ODSETEK", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idTabeliOdsetek;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KLASYFIKACJI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKlasyfikacji;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_KRAJU", type="string", length=3, nullable=true)
     */
    private $symKraju;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_PELNA", type="string", length=200, nullable=true)
     */
    private $nazwaPelna;

    /**
     * @var integer
     *
     * @ORM\Column(name="ODBIORCA", type="smallint", nullable=true)
     */
    private $odbiorca;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOSTAWCA", type="smallint", nullable=true)
     */
    private $dostawca;

    /**
     * @var string
     *
     * @ORM\Column(name="NIP", type="string", length=30, nullable=true)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="REGON", type="string", length=20, nullable=true)
     */
    private $regon;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLATNIK_VAT", type="smallint", nullable=true)
     */
    private $platnikVat;

    /**
     * @var string
     *
     * @ORM\Column(name="LIMIT_KUPIECKI", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $limitKupiecki;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_PLATNOSCI", type="string", length=50, nullable=true)
     */
    private $formaPlatnosci;

    /**
     * @var integer
     *
     * @ORM\Column(name="TERMIN_NALEZNOSCI", type="integer", nullable=true)
     */
    private $terminNaleznosci;

    /**
     * @var integer
     *
     * @ORM\Column(name="TERMIN_ZOBOWIAZAN", type="integer", nullable=true)
     */
    private $terminZobowiazan;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRIORYTET", type="smallint", nullable=true)
     */
    private $priorytet;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=true)
     */
    private $kodKreskowy;

    /**
     * @var integer
     *
     * @ORM\Column(name="DRUKUJ_OSTRZEZENIE", type="smallint", nullable=true)
     */
    private $drukujOstrzezenie;

    /**
     * @var integer
     *
     * @ORM\Column(name="POKAZUJ_OSTRZEZENIE", type="smallint", nullable=true)
     */
    private $pokazujOstrzezenie;

    /**
     * @var string
     *
     * @ORM\Column(name="OSTRZEZENIE", type="string", length=500, nullable=true)
     */
    private $ostrzezenie;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=500, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $kodKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_POCZTOWY", type="string", length=20, nullable=true)
     */
    private $kodPocztowy;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC", type="string", length=50, nullable=true)
     */
    private $miejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ULICA_LOKAL", type="string", length=50, nullable=true)
     */
    private $ulicaLokal;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_WWW", type="string", length=50, nullable=true)
     */
    private $adresWww;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $semafor;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu;

    /**
     * @var string
     *
     * @ORM\Column(name="NIPL", type="string", length=30, nullable=true)
     */
    private $nipl;

    /**
     * @var string
     *
     * @ORM\Column(name="DOS_KOD", type="string", length=5, nullable=true)
     */
    private $dosKod;

    /**
     * @var string
     *
     * @ORM\Column(name="ZGODA_NA_PRZETWARZANIE", type="string", length=1, nullable=true)
     */
    private $zgodaNaPrzetwarzanie;

    /**
     * @var string
     *
     * @ORM\Column(name="KTO_WPISAL", type="string", length=50, nullable=true)
     */
    private $ktoWpisal;

    /**
     * @var string
     *
     * @ORM\Column(name="KTO_POPRAWIL", type="string", length=50, nullable=true)
     */
    private $ktoPoprawil;

    /**
     * @var string
     *
     * @ORM\Column(name="WYROZNIK", type="string", length=50, nullable=true)
     */
    private $wyroznik;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KARTOTEKI", type="string", length=9, nullable=true)
     */
    private $idKartoteki;

    /**
     * @var integer
     *
     * @ORM\Column(name="KONTRAHENTUE", type="smallint", nullable=true)
     */
    private $kontrahentue = '0';


}

