<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A4bInttmpePrp
 *
 * @ORM\Table(name="A4B_IntTmpE_PrP", indexes={@ORM\Index(name="IDX_A4B_IntTmpE_PrP_RecordStatus_IdSession", columns={"A4BSystemUniqueId", "IdRecord", "IdRecordSource", "IdRecordHeader", "RecordCreateDate", "RecordProcessDate", "TransmissionGUID", "MessageId", "RecordStatus", "IdSession"}), @ORM\Index(name="IDX_A4B_IntTmpE_PrP_RecordStatus_RecordProcessDate", columns={"IdSession", "RecordStatus", "RecordProcessDate"}), @ORM\Index(name="IDX_A4B_IntTmpE_PrP_PrP", columns={"IdProductUnique", "Currency", "PriceNet", "PriceGross", "PromoDateBeg", "PromoDateEnd", "PriceNetPromo", "PriceGrossPromo", "RecordStatus", "IdSession"})})
 * @ORM\Entity
 */
class A4bInttmpePrp
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
     * @ORM\Column(name="IdProductPrice", type="string", length=50, nullable=true)
     */
    private $idproductprice;

    /**
     * @var string
     *
     * @ORM\Column(name="IdPrice", type="string", length=50, nullable=true)
     */
    private $idprice;

    /**
     * @var string
     *
     * @ORM\Column(name="IdProductUnique", type="string", length=50, nullable=true)
     */
    private $idproductunique;

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
     * @var string
     *
     * @ORM\Column(name="Currency", type="string", length=5, nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyRate", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $currencyrate;

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

