<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsmInttmpiInp
 *
 * @ORM\Table(name="ABSM_IntTmpI_InP")
 * @ORM\Entity
 */
class AbsmInttmpiInp
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
     * @ORM\Column(name="Type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="IdIndividualPrice", type="string", length=50, nullable=true)
     */
    private $idindividualprice;

    /**
     * @var string
     *
     * @ORM\Column(name="IdSource", type="string", length=50, nullable=true)
     */
    private $idsource;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSource_ABSM", type="integer", nullable=true)
     */
    private $idsourceAbsm;

    /**
     * @var string
     *
     * @ORM\Column(name="IdProductUnique", type="string", length=50, nullable=true)
     */
    private $idproductunique;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductIndex", type="string", length=50, nullable=true)
     */
    private $productindex;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductName", type="string", length=50, nullable=true)
     */
    private $productname;

    /**
     * @var string
     *
     * @ORM\Column(name="PriceMode", type="string", length=50, nullable=true)
     */
    private $pricemode;

    /**
     * @var string
     *
     * @ORM\Column(name="IdPrice", type="string", length=50, nullable=true)
     */
    private $idprice;

    /**
     * @var string
     *
     * @ORM\Column(name="Discount", type="decimal", precision=8, scale=4, nullable=true)
     */
    private $discount;

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


}

