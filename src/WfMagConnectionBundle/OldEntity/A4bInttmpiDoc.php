<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A4bInttmpiDoc
 *
 * @ORM\Table(name="A4B_IntTmpI_Doc", indexes={@ORM\Index(name="IDX_A4B_IntTmpI_Doc_RecordStatus_IdSession", columns={"A4BSystemUniqueId", "IdRecord", "IdRecordSource", "IdRecordHeader", "RecordCreateDate", "RecordProcessDate", "TransmissionGUID", "MessageId", "RecordStatus", "IdSession"}), @ORM\Index(name="IDX_A4B_IntTmpI_Doc_RecordStatus_RecordProcessDate", columns={"IdSession", "RecordStatus", "RecordProcessDate"})})
 * @ORM\Entity
 */
class A4bInttmpiDoc
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
     * @var integer
     *
     * @ORM\Column(name="IdPaymentForm_A4B", type="integer", nullable=true)
     */
    private $idpaymentformA4b;

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
     * @ORM\Column(name="Remarks", type="string", length=2000, nullable=true)
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
     * @ORM\Column(name="IdCustomer_A4B", type="integer", nullable=true)
     */
    private $idcustomerA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="IdPayer", type="string", length=50, nullable=true)
     */
    private $idpayer;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPayer_A4B", type="integer", nullable=true)
     */
    private $idpayerA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="IdContact", type="string", length=50, nullable=true)
     */
    private $idcontact;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdContact_A4B", type="integer", nullable=true)
     */
    private $idcontactA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="IdDocumentSource", type="string", length=50, nullable=true)
     */
    private $iddocumentsource;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDocumentSource_A4B", type="integer", nullable=true)
     */
    private $iddocumentsourceA4b;

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
     * @var string
     *
     * @ORM\Column(name="OrderBaseCurrency", type="string", length=255, nullable=true)
     */
    private $orderbasecurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderForeignCurrency", type="string", length=255, nullable=true)
     */
    private $orderforeigncurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderCurrencyRate", type="decimal", precision=19, scale=8, nullable=true)
     */
    private $ordercurrencyrate;

    /**
     * @var string
     *
     * @ORM\Column(name="BillType", type="string", length=10, nullable=true)
     */
    private $billtype;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderCurrencyNetSum", type="decimal", precision=19, scale=2, nullable=true)
     */
    private $ordercurrencynetsum;

    /**
     * @var string
     *
     * @ORM\Column(name="OrderCurrencyGrossSum", type="decimal", precision=19, scale=2, nullable=true)
     */
    private $ordercurrencygrosssum;

    /**
     * @var string
     *
     * @ORM\Column(name="PaymentName", type="string", length=255, nullable=true)
     */
    private $paymentname;

    /**
     * @var string
     *
     * @ORM\Column(name="DeliveryName", type="string", length=255, nullable=true)
     */
    private $deliveryname;

    /**
     * @var string
     *
     * @ORM\Column(name="DeliveryType", type="string", length=10, nullable=true)
     */
    private $deliverytype;

    /**
     * @var string
     *
     * @ORM\Column(name="BasePriceNet", type="decimal", precision=19, scale=2, nullable=true)
     */
    private $basepricenet;

    /**
     * @var string
     *
     * @ORM\Column(name="BasePriceGross", type="decimal", precision=19, scale=2, nullable=true)
     */
    private $basepricegross;

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
     * @var integer
     *
     * @ORM\Column(name="IdAddressDelivery_A4B", type="integer", nullable=true)
     */
    private $idaddressdeliveryA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressDeliveryFirstname", type="string", length=255, nullable=true)
     */
    private $addressdeliveryfirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressDeliveryLastname", type="string", length=255, nullable=true)
     */
    private $addressdeliverylastname;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressDeliveryFirmName", type="string", length=255, nullable=true)
     */
    private $addressdeliveryfirmname;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressDeliveryPhone", type="string", length=255, nullable=true)
     */
    private $addressdeliveryphone;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressDeliveryAddress", type="string", length=255, nullable=true)
     */
    private $addressdeliveryaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressDeliveryZipCode", type="string", length=255, nullable=true)
     */
    private $addressdeliveryzipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressDeliveryCity", type="string", length=255, nullable=true)
     */
    private $addressdeliverycity;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressDeliveryCountry", type="string", length=255, nullable=true)
     */
    private $addressdeliverycountry;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressPickupFirstname", type="string", length=255, nullable=true)
     */
    private $addresspickupfirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressPickupLastname", type="string", length=255, nullable=true)
     */
    private $addresspickuplastname;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressPickupFirmName", type="string", length=255, nullable=true)
     */
    private $addresspickupfirmname;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressPickupPhone", type="string", length=255, nullable=true)
     */
    private $addresspickupphone;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressPickupAddress", type="string", length=255, nullable=true)
     */
    private $addresspickupaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressPickupZipCode", type="string", length=255, nullable=true)
     */
    private $addresspickupzipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressDPickupCity", type="string", length=255, nullable=true)
     */
    private $addressdpickupcity;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressPickupCountry", type="string", length=255, nullable=true)
     */
    private $addresspickupcountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdAddressInvoice_A4B", type="integer", nullable=true)
     */
    private $idaddressinvoiceA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressInvoiceFirstname", type="string", length=255, nullable=true)
     */
    private $addressinvoicefirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressInvoiceLastname", type="string", length=255, nullable=true)
     */
    private $addressinvoicelastname;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressInvoiceFirmName", type="string", length=255, nullable=true)
     */
    private $addressinvoicefirmname;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressInvoicePhone", type="string", length=255, nullable=true)
     */
    private $addressinvoicephone;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressInvoiceAddress", type="string", length=255, nullable=true)
     */
    private $addressinvoiceaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressInvoiceZipCode", type="string", length=255, nullable=true)
     */
    private $addressinvoicezipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressInvoiceCity", type="string", length=255, nullable=true)
     */
    private $addressinvoicecity;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressInvoiceCountry", type="string", length=255, nullable=true)
     */
    private $addressinvoicecountry;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressInvoiceNip", type="string", length=255, nullable=true)
     */
    private $addressinvoicenip;

    /**
     * @var string
     *
     * @ORM\Column(name="IdPayment", type="string", length=50, nullable=true)
     */
    private $idpayment;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdPayment_A4B", type="integer", nullable=true)
     */
    private $idpaymentA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="IdDelivery", type="string", length=50, nullable=true)
     */
    private $iddelivery;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDelivery_A4B", type="integer", nullable=true)
     */
    private $iddeliveryA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="DeliveryTaxValue", type="decimal", precision=8, scale=4, nullable=true)
     */
    private $deliverytaxvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="PaymentIdentification", type="string", length=255, nullable=true)
     */
    private $paymentidentification;

    /**
     * @var integer
     *
     * @ORM\Column(name="Paid", type="integer", nullable=true)
     */
    private $paid;

    /**
     * @var string
     *
     * @ORM\Column(name="ExtInfo", type="string", length=2000, nullable=true)
     */
    private $extinfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDocPackage", type="integer", nullable=true)
     */
    private $iddocpackage;

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

