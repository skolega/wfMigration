<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RemPozDokMag
 *
 * @ORM\Table(name="REM_POZ_DOK_MAG", indexes={@ORM\Index(name="POZDOKMAG_IDDOK_IDPOZ2", columns={"ID_DOK_MAGAZYNOWEGO", "ID_POZ_DOK_MAG"}), @ORM\Index(name="POZDOKMAG_IDART_POZOK_DATA2", columns={"ID_ARTYKULU", "POZ_PRZYCHODU_OK", "DATA", "ID_DOK_MAGAZYNOWEGO"})})
 * @ORM\Entity
 */
class RemPozDokMag
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_MAG", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozDokMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokMagazynowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_HANDLOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=false)
     */
    private $ilosc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WYDANO", type="string", length=9, nullable=false)
     */
    private $wydano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZAREZERWOWANO", type="string", length=9, nullable=false)
     */
    private $zarezerwowano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_ROZCHODU", type="string", length=1, nullable=true)
     */
    private $pozRozchodu;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_PRZYCHODU_OK", type="string", length=1, nullable=true)
     */
    private $pozPrzychoduOk;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

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
     * @ORM\Column(name="JEDNOSTKA", type="string", length=10, nullable=true)
     */
    private $jednostka;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=true)
     */
    private $przelicznik;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT", type="string", length=5, nullable=true)
     */
    private $rabat;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT_DOK_HANDLOWEGO", type="string", length=5, nullable=true)
     */
    private $rabatDokHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_ARTYKULU", type="string", length=1, nullable=true)
     */
    private $rodzajArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPAKOWANIA_WYDANO", type="string", length=9, nullable=true)
     */
    private $opakowaniaWydano;

    /**
     * @var string
     *
     * @ORM\Column(name="OPAKOWANIA_PRZYJETO", type="string", length=9, nullable=true)
     */
    private $opakowaniaPrzyjeto;


}

