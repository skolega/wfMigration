<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsmInttmpiDoc
 *
 * @ORM\Table(name="ABSM_IntTmpI_Doc")
 * @ORM\Entity
 */
class AbsmInttmpiDoc
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
     * @ORM\Column(name="SellDate", type="datetime", nullable=true)
     */
    private $selldate;

    /**
     * @var string
     *
     * @ORM\Column(name="IssuePlace", type="string", length=50, nullable=true)
     */
    private $issueplace;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CompletionDate", type="datetime", nullable=true)
     */
    private $completiondate;

    /**
     * @var integer
     *
     * @ORM\Column(name="AutoReservation", type="integer", nullable=true)
     */
    private $autoreservation;

    /**
     * @var integer
     *
     * @ORM\Column(name="PriceForm", type="integer", nullable=true)
     */
    private $priceform;

    /**
     * @var integer
     *
     * @ORM\Column(name="Priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="IdPaymentForm", type="string", length=50, nullable=true)
     */
    private $idpaymentform;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PaymentDate", type="datetime", nullable=true)
     */
    private $paymentdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="PaymentTerm", type="integer", nullable=true)
     */
    private $paymentterm;

    /**
     * @var string
     *
     * @ORM\Column(name="Discount", type="decimal", precision=8, scale=4, nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="DiscountWorthNet", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $discountworthnet;

    /**
     * @var string
     *
     * @ORM\Column(name="DiscountWorthGross", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $discountworthgross;

    /**
     * @var string
     *
     * @ORM\Column(name="WorthNet", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $worthnet;

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
     * @ORM\Column(name="Remarks", type="string", length=500, nullable=true)
     */
    private $remarks;

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
     * @var string
     *
     * @ORM\Column(name="IdPayer", type="string", length=50, nullable=true)
     */
    private $idpayer;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPayer_ABSM", type="integer", nullable=true)
     */
    private $idpayerAbsm;

    /**
     * @var string
     *
     * @ORM\Column(name="IdContact", type="string", length=50, nullable=true)
     */
    private $idcontact;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdContact_ABSM", type="integer", nullable=true)
     */
    private $idcontactAbsm;

    /**
     * @var string
     *
     * @ORM\Column(name="IdDocumentSource", type="string", length=50, nullable=true)
     */
    private $iddocumentsource;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDocumentSource_ABSM", type="integer", nullable=true)
     */
    private $iddocumentsourceAbsm;

    /**
     * @var string
     *
     * @ORM\Column(name="SourceDocNumber", type="string", length=50, nullable=true)
     */
    private $sourcedocnumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SourceDocDate", type="datetime", nullable=true)
     */
    private $sourcedocdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdTargetWarehouse", type="integer", nullable=true)
     */
    private $idtargetwarehouse;

    /**
     * @var integer
     *
     * @ORM\Column(name="RegistrMode", type="integer", nullable=false)
     */
    private $registrmode = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDocPackage", type="integer", nullable=true)
     */
    private $iddocpackage;


}

