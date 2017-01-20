<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRapSaldoTransakcje
 *
 * @ORM\Table(name="T_RAP_SALDO_TRANSAKCJE", indexes={@ORM\Index(name="T_RAP_SALDO_TRANSAKCJE_INDEX1", columns={"ID_UZYTKOWNIKA", "ID_KONTRAHENTA"})})
 * @ORM\Entity
 */
class TRapSaldoTransakcje
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_KONTRAHENTA", type="string", length=200, nullable=true)
     */
    private $nazwaKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_KONTRAHENTA", type="string", length=200, nullable=true)
     */
    private $adresKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="SALDO_ZAKUP_DN_SUMA", type="string", length=9, nullable=true)
     */
    private $saldoZakupDnSuma;

    /**
     * @var string
     *
     * @ORM\Column(name="SALDO_SPRZE_DN_SUMA", type="string", length=9, nullable=true)
     */
    private $saldoSprzeDnSuma;

    /**
     * @var string
     *
     * @ORM\Column(name="DOKUM_ZAKUP", type="string", length=9, nullable=true)
     */
    private $dokumZakup;

    /**
     * @var string
     *
     * @ORM\Column(name="DOKUM_SPRZE", type="string", length=9, nullable=true)
     */
    private $dokumSprze;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAPLACONO_ZAKUP", type="string", length=9, nullable=true)
     */
    private $zaplaconoZakup;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAPLACONO_SPRZE", type="string", length=9, nullable=true)
     */
    private $zaplaconoSprze;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=true)
     */
    private $numer;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WYSTAWIENIA", type="string", length=4, nullable=true)
     */
    private $dataWystawienia;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DOK", type="string", length=1, nullable=true)
     */
    private $typDok;

    /**
     * @var string
     *
     * @ORM\Column(name="DOKUM_ZAKUP_WB", type="string", length=9, nullable=true)
     */
    private $dokumZakupWb;

    /**
     * @var string
     *
     * @ORM\Column(name="DOKUM_SPRZE_WB", type="string", length=9, nullable=true)
     */
    private $dokumSprzeWb;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAPLACONO_ZAKUP_WB", type="string", length=9, nullable=true)
     */
    private $zaplaconoZakupWb;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAPLACONO_SPRZE_WB", type="string", length=9, nullable=true)
     */
    private $zaplaconoSprzeWb;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_POZYCJI", type="string", length=500, nullable=true)
     */
    private $opisPozycji;


}

