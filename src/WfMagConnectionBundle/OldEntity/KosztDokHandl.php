<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KosztDokHandl
 *
 * @ORM\Table(name="KOSZT_DOK_HANDL")
 * @ORM\Entity
 */
class KosztDokHandl
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KOSZTU", type="string", length=9, nullable=false)
     */
    private $idKosztu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KOSZTU_KOR", type="string", length=9, nullable=false)
     */
    private $idKosztuKor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="string", length=9, nullable=true)
     */
    private $idDokumentuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO", type="string", length=9, nullable=true)
     */
    private $cenaNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO", type="string", length=9, nullable=true)
     */
    private $cenaBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO", type="string", length=9, nullable=true)
     */
    private $wartoscNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_BRUTTO", type="string", length=9, nullable=true)
     */
    private $wartoscBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_KOSZTU", type="string", length=1, nullable=true)
     */
    private $rodzajKosztu = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="BEZ_WPLYWU_NA_VAT", type="smallint", nullable=true)
     */
    private $bezWplywuNaVat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=false)
     */
    private $idKontrahenta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="string", length=9, nullable=false)
     */
    private $idRozrachunku = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_PLAT", type="string", length=20, nullable=false)
     */
    private $formaPlat = 'przelew';

    /**
     * @var string
     *
     * @ORM\Column(name="TERMIN_PLAT", type="string", length=4, nullable=true)
     */
    private $terminPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=true)
     */
    private $numer;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WYST_FAK", type="string", length=4, nullable=true)
     */
    private $dataWystFak;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_OTRZ_FAK", type="string", length=4, nullable=true)
     */
    private $dataOtrzFak;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_OPER_GOSP", type="string", length=4, nullable=true)
     */
    private $dataOperGosp;

    /**
     * @var string
     *
     * @ORM\Column(name="ROZRACH_NB", type="string", length=1, nullable=true)
     */
    private $rozrachNb = '0';


}

