<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RemArtykul
 *
 * @ORM\Table(name="REM_ARTYKUL", indexes={@ORM\Index(name="ARTYKUL_IDMAG_NAZWA2", columns={"ID_MAGAZYNU", "NAZWA"}), @ORM\Index(name="ARTYKUL_IDMAG_IDKAT_NAZWA2", columns={"ID_MAGAZYNU", "ID_KATEGORII", "NAZWA"}), @ORM\Index(name="ARTYKUL_IDMAG_RODZ_NAZWA2", columns={"ID_MAGAZYNU", "RODZAJ", "NAZWA"}), @ORM\Index(name="ARTYKUL_IDMAG_IHANDL2", columns={"ID_MAGAZYNU", "INDEKS_HANDLOWY"}), @ORM\Index(name="ARTYKUL_IDMAG_STANY", columns={"ID_MAGAZYNU", "STAN", "STAN_PO"}), @ORM\Index(name="ARTYKUL_IDMAG_IDDOK", columns={"ID_MAGAZYNU", "ID_DOK_MAGAZYNOWEGO"})})
 * @ORM\Entity
 */
class RemArtykul
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="string", length=9, nullable=false)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokMagazynowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII", type="string", length=9, nullable=true)
     */
    private $idKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_ZAKUPU", type="string", length=3, nullable=true)
     */
    private $vatZakupu;

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
     * @ORM\Column(name="INDEKS_KATALOGOWY", type="string", length=20, nullable=false)
     */
    private $indeksKatalogowy;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEKS_HANDLOWY", type="string", length=20, nullable=false)
     */
    private $indeksHandlowy;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=10, nullable=true)
     */
    private $rodzaj;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_ZAKUPU_NETTO", type="string", length=9, nullable=true)
     */
    private $cenaZakupuNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_ZAKUPU_BRUTTO", type="string", length=9, nullable=true)
     */
    private $cenaZakupuBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="STAN", type="string", length=9, nullable=true)
     */
    private $stan = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="STAN_PO", type="string", length=9, nullable=true)
     */
    private $stanPo;

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
     * @ORM\Column(name="ID_DOK_MAG_OLD", type="string", length=9, nullable=true)
     */
    private $idDokMagOld;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_SERII", type="string", length=50, nullable=true)
     */
    private $nrSerii;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WAZNOSCI", type="string", length=4, nullable=true)
     */
    private $dataWaznosci;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_MAG", type="string", length=9, nullable=true)
     */
    private $idPozDokMag;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOSTAWY", type="string", length=30, nullable=true)
     */
    private $nrDostawy;

    /**
     * @var integer
     *
     * @ORM\Column(name="WYKONANY", type="smallint", nullable=true)
     */
    private $wykonany = '0';


}

