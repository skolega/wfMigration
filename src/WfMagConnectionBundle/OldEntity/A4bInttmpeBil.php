<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A4bInttmpeBil
 *
 * @ORM\Table(name="A4B_IntTmpE_Bil", indexes={@ORM\Index(name="IDX_A4B_IntTmpE_Bil_RecordStatus_IdSession", columns={"A4BSystemUniqueId", "IdRecord", "IdRecordSource", "IdRecordHeader", "RecordCreateDate", "RecordProcessDate", "TransmissionGUID", "MessageId", "RecordStatus", "IdSession"}), @ORM\Index(name="IDX_A4B_IntTmpE_Bil_RecordStatus_RecordProcessDate", columns={"IdSession", "RecordStatus", "RecordProcessDate"})})
 * @ORM\Entity
 */
class A4bInttmpeBil
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
     * @ORM\Column(name="IdBill_A4B", type="integer", nullable=true)
     */
    private $idbillA4b;

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
     * @ORM\Column(name="CurrencyWorthGross", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $currencyworthgross;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyWorthPayments", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $currencyworthpayments;

    /**
     * @var string
     *
     * @ORM\Column(name="BaseCurrency", type="string", length=255, nullable=true)
     */
    private $basecurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="ForeignCurrency", type="string", length=255, nullable=true)
     */
    private $foreigncurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyRate", type="decimal", precision=19, scale=8, nullable=true)
     */
    private $currencyrate;

    /**
     * @var string
     *
     * @ORM\Column(name="IdDocument", type="string", length=50, nullable=true)
     */
    private $iddocument;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDocument_A4B", type="integer", nullable=true)
     */
    private $iddocumentA4b;

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
     * @ORM\Column(name="IdCustomer_A4B", type="integer", nullable=true)
     */
    private $idcustomerA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="IdInvoiceCustomer", type="string", length=50, nullable=true)
     */
    private $idinvoicecustomer;

    /**
     * @var integer
     *
     * @ORM\Column(name="Paid", type="integer", nullable=true)
     */
    private $paid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LastPaymentDate", type="datetime", nullable=true)
     */
    private $lastpaymentdate;

    /**
     * @var string
     *
     * @ORM\Column(name="AddNumber", type="string", length=50, nullable=true)
     */
    private $addnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="WorthNet", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $worthnet;

    /**
     * @var string
     *
     * @ORM\Column(name="WorthVat", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $worthvat;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyWorthNet", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $currencyworthnet;

    /**
     * @var string
     *
     * @ORM\Column(name="CurrencyWorthVat", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $currencyworthvat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SaleDate", type="datetime", nullable=true)
     */
    private $saledate;

    /**
     * @var string
     *
     * @ORM\Column(name="PaymentMethod", type="string", length=50, nullable=true)
     */
    private $paymentmethod;

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

