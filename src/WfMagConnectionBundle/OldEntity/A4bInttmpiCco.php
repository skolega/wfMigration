<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A4bInttmpiCco
 *
 * @ORM\Table(name="A4B_IntTmpI_CCo", indexes={@ORM\Index(name="IDX_A4B_IntTmpI_CCo_RecordStatus_IdSession", columns={"A4BSystemUniqueId", "IdRecord", "IdRecordSource", "IdRecordHeader", "RecordCreateDate", "RecordProcessDate", "TransmissionGUID", "MessageId", "RecordStatus", "IdSession"}), @ORM\Index(name="IDX_A4B_IntTmpI_CCo_RecordStatus_RecordProcessDate", columns={"IdSession", "RecordStatus", "RecordProcessDate"})})
 * @ORM\Entity
 */
class A4bInttmpiCco
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
     * @ORM\Column(name="FirstName", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="Position", type="string", length=50, nullable=true)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="PhoneNo", type="string", length=50, nullable=true)
     */
    private $phoneno;

    /**
     * @var string
     *
     * @ORM\Column(name="CellPhoneNo", type="string", length=50, nullable=true)
     */
    private $cellphoneno;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=512, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Remarks", type="string", length=200, nullable=true)
     */
    private $remarks;

    /**
     * @var integer
     *
     * @ORM\Column(name="IsDefault", type="integer", nullable=true)
     */
    private $isdefault;

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

