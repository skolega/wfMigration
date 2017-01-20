<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A4bInttmpeDod
 *
 * @ORM\Table(name="A4B_IntTmpE_DoD", indexes={@ORM\Index(name="IDX_A4B_IntTmpE_DoD_RecordStatus_IdSession", columns={"A4BSystemUniqueId", "IdRecord", "IdRecordSource", "IdRecordHeader", "RecordCreateDate", "RecordProcessDate", "TransmissionGUID", "MessageId", "RecordStatus", "IdSession"}), @ORM\Index(name="IDX_A4B_IntTmpE_DoD_RecordStatus_RecordProcessDate", columns={"IdSession", "RecordStatus", "RecordProcessDate"})})
 * @ORM\Entity
 */
class A4bInttmpeDod
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdRecord", type="bigint", nullable=false)
     */
    private $idrecord;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdRecordSource", type="bigint", nullable=true)
     */
    private $idrecordsource;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdRecordHeader", type="bigint", nullable=true)
     */
    private $idrecordheader;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSession", type="bigint", nullable=true)
     */
    private $idsession;

    /**
     * @var string
     *
     * @ORM\Column(name="RecordTime", type="string", length=8, nullable=true)
     */
    private $recordtime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="RecordCreateDate", type="datetime", nullable=false)
     */
    private $recordcreatedate = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="RecordProcessDate", type="datetime", nullable=true)
     */
    private $recordprocessdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecordStatus", type="integer", nullable=true)
     */
    private $recordstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="Comm", type="string", length=10, nullable=true)
     */
    private $comm;

    /**
     * @var string
     *
     * @ORM\Column(name="IdComp", type="string", length=50, nullable=true)
     */
    private $idcomp;

    /**
     * @var string
     *
     * @ORM\Column(name="IdWar", type="string", length=50, nullable=true)
     */
    private $idwar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateMod", type="datetime", nullable=false)
     */
    private $datemod;

    /**
     * @var integer
     *
     * @ORM\Column(name="DelInd", type="integer", nullable=false)
     */
    private $delind;

    /**
     * @var string
     *
     * @ORM\Column(name="IdDocumentDetail", type="string", length=50, nullable=true)
     */
    private $iddocumentdetail;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDocumentDetail_A4B", type="bigint", nullable=true)
     */
    private $iddocumentdetailA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="IdProductUnique", type="string", length=50, nullable=true)
     */
    private $idproductunique;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ordinal", type="integer", nullable=true)
     */
    private $ordinal;

    /**
     * @var integer
     *
     * @ORM\Column(name="StockChange", type="integer", nullable=true)
     */
    private $stockchange;

    /**
     * @var string
     *
     * @ORM\Column(name="TaxValue", type="decimal", precision=8, scale=4, nullable=true)
     */
    private $taxvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="PriceNet", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $pricenet;

    /**
     * @var string
     *
     * @ORM\Column(name="PriceGross", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $pricegross;

    /**
     * @var string
     *
     * @ORM\Column(name="Discount", type="decimal", precision=8, scale=4, nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="PriceNetDiscount", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $pricenetdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="PriceGrossDiscount", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $pricegrossdiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="Quantity", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="Reserved", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $reserved;

    /**
     * @var string
     *
     * @ORM\Column(name="IdUnit", type="string", length=50, nullable=true)
     */
    private $idunit;

    /**
     * @var string
     *
     * @ORM\Column(name="UnitShortcut", type="string", length=10, nullable=true)
     */
    private $unitshortcut;

    /**
     * @var integer
     *
     * @ORM\Column(name="UnitDivisible", type="integer", nullable=true)
     */
    private $unitdivisible;

    /**
     * @var string
     *
     * @ORM\Column(name="ConversionRate", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $conversionrate;

    /**
     * @var string
     *
     * @ORM\Column(name="BaseUnitRate", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $baseunitrate;

    /**
     * @var string
     *
     * @ORM\Column(name="WorthNet", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $worthnet;

    /**
     * @var string
     *
     * @ORM\Column(name="WorthGross", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $worthgross;

    /**
     * @var string
     *
     * @ORM\Column(name="Remarks", type="string", length=500, nullable=true)
     */
    private $remarks;

    /**
     * @var string
     *
     * @ORM\Column(name="IdTradeDocument", type="string", length=50, nullable=true)
     */
    private $idtradedocument;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTradeDocument_A4B", type="integer", nullable=true)
     */
    private $idtradedocumentA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="IdWarehouseDocument", type="string", length=50, nullable=true)
     */
    private $idwarehousedocument;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdWarehouseDocument_A4B", type="integer", nullable=true)
     */
    private $idwarehousedocumentA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyPriceNet", type="decimal", precision=19, scale=2, nullable=true)
     */
    private $currencypricenet;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyPriceGross", type="decimal", precision=19, scale=2, nullable=true)
     */
    private $currencypricegross;

    /**
     * @var string
     *
     * @ORM\Column(name="DiscountCurrencyPriceNet", type="decimal", precision=19, scale=2, nullable=true)
     */
    private $discountcurrencypricenet;

    /**
     * @var string
     *
     * @ORM\Column(name="DiscountCurrencyPriceGross", type="decimal", precision=19, scale=2, nullable=true)
     */
    private $discountcurrencypricegross;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyWorthNet", type="decimal", precision=19, scale=2, nullable=true)
     */
    private $currencyworthnet;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyWorthGross", type="decimal", precision=19, scale=2, nullable=true)
     */
    private $currencyworthgross;

    /**
     * @var integer
     *
     * @ORM\Column(name="MapDocumentDetail", type="integer", nullable=true)
     */
    private $mapdocumentdetail;

    /**
     * @var string
     *
     * @ORM\Column(name="A4BSystemUniqueId", type="string", length=200, nullable=true)
     */
    private $a4bsystemuniqueid;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="TransmissionGUID", type="uniqueidentifier", nullable=true)
     */
    private $transmissionguid;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="MessageId", type="uniqueidentifier", nullable=true)
     */
    private $messageid;

    /**
     * @var string
     *
     * @ORM\Column(name="ExtSystemType", type="string", length=5, nullable=true)
     */
    private $extsystemtype;


}

