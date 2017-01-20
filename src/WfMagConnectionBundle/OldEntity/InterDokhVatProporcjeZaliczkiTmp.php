<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterDokhVatProporcjeZaliczkiTmp
 *
 * @ORM\Table(name="INTER_DOKH_VAT_PROPORCJE_ZALICZKI_TMP")
 * @ORM\Entity
 */
class InterDokhVatProporcjeZaliczkiTmp
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="string", length=9, nullable=false)
     */
    private $idDokumentuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=false)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="PROCENT_PROPORCJI", type="string", length=9, nullable=true)
     */
    private $procentProporcji;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_BRUTTO_ZALICZKI", type="string", length=9, nullable=true)
     */
    private $kwotaBruttoZaliczki;

    /**
     * @var string
     *
     * @ORM\Column(name="WALUTA", type="string", length=3, nullable=false)
     */
    private $waluta;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO", type="string", length=9, nullable=true)
     */
    private $wartoscNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_VAT", type="string", length=9, nullable=true)
     */
    private $wartoscVat;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO_WAL", type="string", length=9, nullable=true)
     */
    private $wartoscNettoWal;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_VAT_WAL", type="string", length=9, nullable=true)
     */
    private $wartoscVatWal;

    /**
     * @var string
     *
     * @ORM\Column(name="STAWKA", type="string", length=5, nullable=true)
     */
    private $stawka;


}

