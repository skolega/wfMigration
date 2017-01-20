<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsmInttmpeBil
 *
 * @ORM\Table(name="ABSM_IntTmpE_Bil")
 * @ORM\Entity
 */
class AbsmInttmpeBil
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
     * @var integer
     *
     * @ORM\Column(name="BillType", type="integer", nullable=true)
     */
    private $billtype;

    /**
     * @var string
     *
     * @ORM\Column(name="Number", type="string", length=50, nullable=true)
     */
    private $number;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="IssueDate", type="datetime", nullable=true)
     */
    private $issuedate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PaymentDate", type="datetime", nullable=true)
     */
    private $paymentdate;

    /**
     * @var string
     *
     * @ORM\Column(name="WorthGross", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $worthgross;

    /**
     * @var string
     *
     * @ORM\Column(name="WorthPayments", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $worthpayments;

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
     * @var integer
     *
     * @ORM\Column(name="IdDocType", type="integer", nullable=true)
     */
    private $iddoctype;

    /**
     * @var string
     *
     * @ORM\Column(name="IdUser", type="string", length=50, nullable=true)
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="IdUserAlt", type="string", length=50, nullable=true)
     */
    private $iduseralt;

    /**
     * @var string
     *
     * @ORM\Column(name="IdCustomer", type="string", length=50, nullable=true)
     */
    private $idcustomer;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdCustomer_ABSM", type="integer", nullable=true)
     */
    private $idcustomerAbsm;

    /**
     * @var integer
     *
     * @ORM\Column(name="Paid", type="integer", nullable=true)
     */
    private $paid;


}

