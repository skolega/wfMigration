<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A4bInttmpePrs
 *
 * @ORM\Table(name="A4B_IntTmpE_PrS", indexes={@ORM\Index(name="IDX_A4B_IntTmpE_PrS_RecordStatus_IdSession", columns={"A4BSystemUniqueId", "IdRecord", "IdRecordSource", "IdRecordHeader", "RecordCreateDate", "RecordProcessDate", "TransmissionGUID", "MessageId", "RecordStatus", "IdSession"}), @ORM\Index(name="IDX_A4B_IntTmpE_PrS_RecordStatus_RecordProcessDate", columns={"IdSession", "RecordStatus", "RecordProcessDate"}), @ORM\Index(name="IDX_A4B_IntTmpE_PrS_IdProductUnique", columns={"IdRecord", "RecordStatus", "IdSession", "RecordCreateDate", "MessageId", "IdProductUnique"})})
 * @ORM\Entity
 */
class A4bInttmpePrs
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
     * @ORM\Column(name="IdProductUnique", type="string", length=50, nullable=true)
     */
    private $idproductunique;

    /**
     * @var string
     *
     * @ORM\Column(name="Stock", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $stock;

    /**
     * @var string
     *
     * @ORM\Column(name="Reserved", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $reserved;

    /**
     * @var string
     *
     * @ORM\Column(name="TemporaryReserved", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $temporaryreserved;

    /**
     * @var string
     *
     * @ORM\Column(name="StockMinimum", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $stockminimum;

    /**
     * @var string
     *
     * @ORM\Column(name="StockMaximum", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $stockmaximum;

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

