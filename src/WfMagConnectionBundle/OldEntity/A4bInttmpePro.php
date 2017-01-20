<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A4bInttmpePro
 *
 * @ORM\Table(name="A4B_IntTmpE_Pro", indexes={@ORM\Index(name="IDX_A4B_IntTmpE_Pro_RecordStatus_IdSession", columns={"A4BSystemUniqueId", "IdRecord", "IdRecordSource", "IdRecordHeader", "RecordCreateDate", "RecordProcessDate", "TransmissionGUID", "MessageId", "RecordStatus", "IdSession"}), @ORM\Index(name="IDX_A4B_IntTmpE_Pro_RecordStatus_RecordProcessDate", columns={"IdSession", "RecordStatus", "RecordProcessDate"}), @ORM\Index(name="IDX_A4B_IntTmpE_Pro_PRS", columns={"IdRecordSource", "IdRecordHeader", "IdComp", "IdWar", "DateMod", "DelInd", "IdProductUnique", "A4BSystemUniqueId", "TransmissionGUID", "MessageId", "IdSession", "RecordStatus", "StockChange"}), @ORM\Index(name="IDX_A4B_IntTmpE_Pro_IdProductUnique", columns={"IgnoreIndPrices", "ExtSystemType", "IdSession", "IdProductUnique"})})
 * @ORM\Entity
 */
class A4bInttmpePro
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
     * @var \DateTime
     *
     * @ORM\Column(name="RecordProcessDateProductWarehouse", type="datetime", nullable=true)
     */
    private $recordprocessdateproductwarehouse;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecordStatus", type="integer", nullable=true)
     */
    private $recordstatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecordStatusProductWarehouse", type="integer", nullable=true)
     */
    private $recordstatusproductwarehouse;

    /**
     * @var string
     *
     * @ORM\Column(name="Comm", type="string", length=3, nullable=true)
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
     * @ORM\Column(name="IdProductGuid", type="string", length=200, nullable=true)
     */
    private $idproductguid;

    /**
     * @var string
     *
     * @ORM\Column(name="IdProductUnique", type="string", length=50, nullable=true)
     */
    private $idproductunique;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Name2", type="string", length=50, nullable=true)
     */
    private $name2;

    /**
     * @var string
     *
     * @ORM\Column(name="NameOriginal", type="string", length=100, nullable=true)
     */
    private $nameoriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="SWWKU", type="string", length=50, nullable=true)
     */
    private $swwku;

    /**
     * @var string
     *
     * @ORM\Column(name="PKWIU", type="string", length=50, nullable=true)
     */
    private $pkwiu;

    /**
     * @var string
     *
     * @ORM\Column(name="BarCode", type="string", length=500, nullable=true)
     */
    private $barcode;

    /**
     * @var string
     *
     * @ORM\Column(name="TaxSale", type="string", length=3, nullable=true)
     */
    private $taxsale;

    /**
     * @var string
     *
     * @ORM\Column(name="TaxPurchase", type="string", length=3, nullable=true)
     */
    private $taxpurchase;

    /**
     * @var string
     *
     * @ORM\Column(name="IndexCatalog", type="string", length=50, nullable=true)
     */
    private $indexcatalog;

    /**
     * @var string
     *
     * @ORM\Column(name="IndexTrade", type="string", length=50, nullable=true)
     */
    private $indextrade;

    /**
     * @var string
     *
     * @ORM\Column(name="Localisation", type="string", length=50, nullable=true)
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="Remarks", type="string", length=2000, nullable=true)
     */
    private $remarks;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=2000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Warning", type="string", length=500, nullable=true)
     */
    private $warning;

    /**
     * @var string
     *
     * @ORM\Column(name="ShowWarning", type="string", length=50, nullable=true)
     */
    private $showwarning;

    /**
     * @var string
     *
     * @ORM\Column(name="PriceNetPurchase", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $pricenetpurchase;

    /**
     * @var string
     *
     * @ORM\Column(name="PriceGrossPurchase", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $pricegrosspurchase;

    /**
     * @var integer
     *
     * @ORM\Column(name="StockChange", type="integer", nullable=true)
     */
    private $stockchange;

    /**
     * @var integer
     *
     * @ORM\Column(name="Discountable", type="integer", nullable=true)
     */
    private $discountable;

    /**
     * @var integer
     *
     * @ORM\Column(name="WarehouseLock", type="integer", nullable=true)
     */
    private $warehouselock;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PromoDateBeg", type="datetime", nullable=true)
     */
    private $promodatebeg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PromoDateEnd", type="datetime", nullable=true)
     */
    private $promodateend;

    /**
     * @var string
     *
     * @ORM\Column(name="PriceNetPromo", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $pricenetpromo;

    /**
     * @var string
     *
     * @ORM\Column(name="PriceGrossPromo", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $pricegrosspromo;

    /**
     * @var integer
     *
     * @ORM\Column(name="PricePromoDiscountable", type="integer", nullable=true)
     */
    private $pricepromodiscountable;

    /**
     * @var string
     *
     * @ORM\Column(name="IdUnit", type="string", length=50, nullable=true)
     */
    private $idunit;

    /**
     * @var string
     *
     * @ORM\Column(name="IdUnitSale", type="string", length=50, nullable=true)
     */
    private $idunitsale;

    /**
     * @var string
     *
     * @ORM\Column(name="IdUnitPurchase", type="string", length=50, nullable=true)
     */
    private $idunitpurchase;

    /**
     * @var string
     *
     * @ORM\Column(name="IdPrice", type="string", length=50, nullable=true)
     */
    private $idprice;

    /**
     * @var string
     *
     * @ORM\Column(name="IdType", type="string", length=50, nullable=true)
     */
    private $idtype;

    /**
     * @var string
     *
     * @ORM\Column(name="IdCategory", type="string", length=50, nullable=true)
     */
    private $idcategory;

    /**
     * @var string
     *
     * @ORM\Column(name="RefQty", type="decimal", precision=19, scale=6, nullable=true)
     */
    private $refqty;

    /**
     * @var string
     *
     * @ORM\Column(name="IdCategoryTree", type="string", length=50, nullable=true)
     */
    private $idcategorytree;

    /**
     * @var string
     *
     * @ORM\Column(name="VatProfitMargin", type="string", length=10, nullable=true)
     */
    private $vatprofitmargin;

    /**
     * @var string
     *
     * @ORM\Column(name="Producer", type="string", length=50, nullable=true)
     */
    private $producer;

    /**
     * @var string
     *
     * @ORM\Column(name="Country", type="string", length=3, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="WeightPackage", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $weightpackage;

    /**
     * @var string
     *
     * @ORM\Column(name="WidthPackage", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $widthpackage;

    /**
     * @var string
     *
     * @ORM\Column(name="LengthPackage", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $lengthpackage;

    /**
     * @var string
     *
     * @ORM\Column(name="HeightPackage", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $heightpackage;

    /**
     * @var string
     *
     * @ORM\Column(name="BaseUnitRate", type="decimal", precision=19, scale=6, nullable=true)
     */
    private $baseunitrate;

    /**
     * @var integer
     *
     * @ORM\Column(name="Deactivate", type="integer", nullable=true)
     */
    private $deactivate;

    /**
     * @var string
     *
     * @ORM\Column(name="IdUnitNum", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idunitnum;

    /**
     * @var integer
     *
     * @ORM\Column(name="IgnoreIndPrices", type="integer", nullable=true)
     */
    private $ignoreindprices;

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

