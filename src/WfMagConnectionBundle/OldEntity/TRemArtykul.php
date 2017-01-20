<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRemArtykul
 *
 * @ORM\Table(name="T_REM_ARTYKUL", indexes={@ORM\Index(name="ARTYKUL_IDMAG_NAZWA22", columns={"ID_MAGAZYNU", "NAZWA"}), @ORM\Index(name="ARTYKUL_IDMAG_IDKAT_NAZWA22", columns={"ID_MAGAZYNU", "ID_KATEGORII", "NAZWA"}), @ORM\Index(name="ARTYKUL_IDMAG_RODZ_NAZWA22", columns={"ID_MAGAZYNU", "RODZAJ", "NAZWA"}), @ORM\Index(name="ARTYKUL_IDMAG_IHANDL22", columns={"ID_MAGAZYNU", "INDEKS_HANDLOWY"})})
 * @ORM\Entity
 */
class TRemArtykul
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
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO", type="string", length=9, nullable=false)
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
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=false)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII", type="string", length=9, nullable=false)
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
     * @ORM\Column(name="CENA_ZAKUPU_NETTO", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $cenaZakupuNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_ZAKUPU_BRUTTO", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $cenaZakupuBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="STAN", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $stan = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="STAN_PO", type="decimal", precision=16, scale=6, nullable=true)
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
     * @ORM\Column(name="PRZELICZNIK", type="decimal", precision=16, scale=6, nullable=true)
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
     * @ORM\Column(name="NR_DOSTAWY", type="string", length=20, nullable=true)
     */
    private $nrDostawy;

    /**
     * @var integer
     *
     * @ORM\Column(name="WYKONANY", type="smallint", nullable=true)
     */
    private $wykonany = '0';


}

