<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A4bInttmpiCus
 *
 * @ORM\Table(name="A4B_IntTmpI_Cus", indexes={@ORM\Index(name="IDX_A4B_IntTmpI_Cus_RecordStatus_IdSession", columns={"A4BSystemUniqueId", "IdRecord", "IdRecordSource", "IdRecordHeader", "RecordCreateDate", "RecordProcessDate", "TransmissionGUID", "MessageId", "RecordStatus", "IdSession"}), @ORM\Index(name="IDX_A4B_IntTmpI_Cus_RecordStatus_RecordProcessDate", columns={"IdSession", "RecordStatus", "RecordProcessDate"})})
 * @ORM\Entity
 */
class A4bInttmpiCus
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
     * @var \DateTime
     *
     * @ORM\Column(name="RecordProcessDateMerge", type="datetime", nullable=true)
     */
    private $recordprocessdatemerge;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecordStatusMerge", type="integer", nullable=true)
     */
    private $recordstatusmerge;

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
     * @ORM\Column(name="IdCustomerMerge", type="string", length=50, nullable=true)
     */
    private $idcustomermerge;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="FullName", type="string", length=200, nullable=true)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="DistinguishFeature", type="string", length=50, nullable=true)
     */
    private $distinguishfeature;

    /**
     * @var string
     *
     * @ORM\Column(name="NIP", type="string", length=30, nullable=true)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="PESEL", type="string", length=30, nullable=true)
     */
    private $pesel;

    /**
     * @var string
     *
     * @ORM\Column(name="Regon", type="string", length=20, nullable=true)
     */
    private $regon;

    /**
     * @var string
     *
     * @ORM\Column(name="PostalCode", type="string", length=20, nullable=true)
     */
    private $postalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="City", type="string", length=50, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="Street", type="string", length=50, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="LocumNumber", type="string", length=50, nullable=true)
     */
    private $locumnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Homepage", type="string", length=50, nullable=true)
     */
    private $homepage;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=512, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Remarks", type="string", length=1000, nullable=true)
     */
    private $remarks;

    /**
     * @var string
     *
     * @ORM\Column(name="Warning", type="string", length=1000, nullable=true)
     */
    private $warning;

    /**
     * @var integer
     *
     * @ORM\Column(name="ShowWarning", type="integer", nullable=true)
     */
    private $showwarning;

    /**
     * @var string
     *
     * @ORM\Column(name="IdRegion", type="string", length=50, nullable=true)
     */
    private $idregion;

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
     * @ORM\Column(name="IdGroup", type="string", length=50, nullable=true)
     */
    private $idgroup;

    /**
     * @var string
     *
     * @ORM\Column(name="IdClassification", type="string", length=50, nullable=true)
     */
    private $idclassification;

    /**
     * @var string
     *
     * @ORM\Column(name="IdPaymentForm", type="string", length=50, nullable=true)
     */
    private $idpaymentform;

    /**
     * @var string
     *
     * @ORM\Column(name="IdUser", type="string", length=50, nullable=true)
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="Recipient", type="integer", nullable=true)
     */
    private $recipient;

    /**
     * @var integer
     *
     * @ORM\Column(name="Supplier", type="integer", nullable=true)
     */
    private $supplier;

    /**
     * @var integer
     *
     * @ORM\Column(name="TaxPayer", type="integer", nullable=true)
     */
    private $taxpayer;

    /**
     * @var integer
     *
     * @ORM\Column(name="PersDataAgreement", type="integer", nullable=true)
     */
    private $persdataagreement;

    /**
     * @var string
     *
     * @ORM\Column(name="TradeCredit", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $tradecredit;

    /**
     * @var integer
     *
     * @ORM\Column(name="DaysDelay", type="integer", nullable=true)
     */
    private $daysdelay;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaleLock", type="integer", nullable=true)
     */
    private $salelock;

    /**
     * @var integer
     *
     * @ORM\Column(name="WarehouseLock", type="integer", nullable=true)
     */
    private $warehouselock;

    /**
     * @var string
     *
     * @ORM\Column(name="DiscountDefault", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $discountdefault;

    /**
     * @var integer
     *
     * @ORM\Column(name="TermReceivables", type="integer", nullable=true)
     */
    private $termreceivables;

    /**
     * @var integer
     *
     * @ORM\Column(name="TermLiabilities", type="integer", nullable=true)
     */
    private $termliabilities;

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerCreateInfo", type="string", length=200, nullable=true)
     */
    private $customercreateinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="CustomerModifyInfo", type="string", length=200, nullable=true)
     */
    private $customermodifyinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="Country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="PhoneNo", type="string", length=40, nullable=true)
     */
    private $phoneno;

    /**
     * @var integer
     *
     * @ORM\Column(name="Deactivate", type="integer", nullable=true)
     */
    private $deactivate;

    /**
     * @var integer
     *
     * @ORM\Column(name="PromotionAvaliable", type="integer", nullable=true)
     */
    private $promotionavaliable;

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

