<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsmInttmpiFdd
 *
 * @ORM\Table(name="ABSM_IntTmpI_FDD")
 * @ORM\Entity
 */
class AbsmInttmpiFdd
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
     * @ORM\Column(name="IdDocumentFinDetail", type="string", length=50, nullable=true)
     */
    private $iddocumentfindetail;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDocumentFinDetail_ABSM", type="integer", nullable=true)
     */
    private $iddocumentfindetailAbsm;

    /**
     * @var string
     *
     * @ORM\Column(name="IdDocumentFin", type="string", length=50, nullable=true)
     */
    private $iddocumentfin;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDocumentFin_ABSM", type="integer", nullable=true)
     */
    private $iddocumentfinAbsm;

    /**
     * @var string
     *
     * @ORM\Column(name="IdBill", type="string", length=50, nullable=true)
     */
    private $idbill;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdBill_ABSM", type="integer", nullable=true)
     */
    private $idbillAbsm;

    /**
     * @var string
     *
     * @ORM\Column(name="IdDocument", type="string", length=50, nullable=true)
     */
    private $iddocument;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDocument_ABSM", type="integer", nullable=true)
     */
    private $iddocumentAbsm;

    /**
     * @var string
     *
     * @ORM\Column(name="Amount", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDocPackage", type="integer", nullable=true)
     */
    private $iddocpackage;


}

