<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A4bInttmpeCom
 *
 * @ORM\Table(name="A4B_IntTmpE_Com", indexes={@ORM\Index(name="IDX_A4B_IntTmpE_Com_RecordStatus_IdSession", columns={"A4BSystemUniqueId", "IdRecord", "IdRecordSource", "IdRecordHeader", "RecordCreateDate", "RecordProcessDate", "TransmissionGUID", "MessageId", "RecordStatus", "IdSession"}), @ORM\Index(name="IDX_A4B_IntTmpE_Com_RecordStatus_RecordProcessDate", columns={"IdSession", "RecordStatus", "RecordProcessDate"})})
 * @ORM\Entity
 */
class A4bInttmpeCom
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
     * @ORM\Column(name="Nip", type="string", length=30, nullable=true)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="Regon", type="string", length=30, nullable=true)
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
     * @ORM\Column(name="Remarks", type="string", length=500, nullable=true)
     */
    private $remarks;

    /**
     * @var string
     *
     * @ORM\Column(name="BankName", type="string", length=200, nullable=true)
     */
    private $bankname;

    /**
     * @var string
     *
     * @ORM\Column(name="AccountNumber", type="string", length=200, nullable=true)
     */
    private $accountnumber;

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

