<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A4bInttmpeDea
 *
 * @ORM\Table(name="A4B_IntTmpE_DeA", indexes={@ORM\Index(name="IDX_A4B_IntTmpE_DeA_RecordStatus_IdSession", columns={"A4BSystemUniqueId", "IdRecord", "IdRecordSource", "IdRecordHeader", "RecordCreateDate", "RecordProcessDate", "TransmissionGUID", "MessageId", "RecordStatus", "IdSession"}), @ORM\Index(name="IDX_A4B_IntTmpE_DeA_RecordStatus_RecordProcessDate", columns={"IdSession", "RecordStatus", "RecordProcessDate"})})
 * @ORM\Entity
 */
class A4bInttmpeDea
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
     * @ORM\Column(name="IdDeliveryAddress", type="string", length=50, nullable=true)
     */
    private $iddeliveryaddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDeliveryAddress_A4B", type="integer", nullable=true)
     */
    private $iddeliveryaddressA4b;

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
     * @ORM\Column(name="Firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="Lastname", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="FirmName", type="string", length=255, nullable=true)
     */
    private $firmname;

    /**
     * @var string
     *
     * @ORM\Column(name="PhoneNo", type="string", length=255, nullable=true)
     */
    private $phoneno;

    /**
     * @var string
     *
     * @ORM\Column(name="Street", type="string", length=255, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="LocumNumber", type="string", length=255, nullable=true)
     */
    private $locumnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="PostalCode", type="string", length=255, nullable=true)
     */
    private $postalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="City", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="CountryCode", type="string", length=10, nullable=true)
     */
    private $countrycode;

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

