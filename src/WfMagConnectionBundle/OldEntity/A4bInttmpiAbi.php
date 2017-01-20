<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A4bInttmpiAbi
 *
 * @ORM\Table(name="A4B_IntTmpI_ABI", indexes={@ORM\Index(name="IDX_A4B_IntTmpI_ABI_RecordStatus_IdSession", columns={"A4BSystemUniqueId", "IdRecord", "IdRecordSource", "IdRecordHeader", "RecordCreateDate", "RecordProcessDate", "TransmissionGUID", "MessageId", "RecordStatus", "IdSession"}), @ORM\Index(name="IDX_A4B_IntTmpI_ABI_RecordStatus_RecordProcessDate", columns={"IdSession", "RecordStatus", "RecordProcessDate"})})
 * @ORM\Entity
 */
class A4bInttmpiAbi
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
     * @ORM\Column(name="IdTill", type="string", length=50, nullable=true)
     */
    private $idtill;

    /**
     * @var string
     *
     * @ORM\Column(name="IdUser", type="string", length=50, nullable=true)
     */
    private $iduser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="RegistryDate", type="datetime", nullable=true)
     */
    private $registrydate;

    /**
     * @var string
     *
     * @ORM\Column(name="SystemType", type="string", length=10, nullable=true)
     */
    private $systemtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="Fresh", type="integer", nullable=true)
     */
    private $fresh;

    /**
     * @var integer
     *
     * @ORM\Column(name="Activate", type="integer", nullable=true)
     */
    private $activate;

    /**
     * @var string
     *
     * @ORM\Column(name="A4BSystemUniqueId", type="string", length=200, nullable=false)
     */
    private $a4bsystemuniqueid;

    /**
     * @var string
     *
     * @ORM\Column(name="DatabaseName", type="string", length=100, nullable=true)
     */
    private $databasename;

    /**
     * @var string
     *
     * @ORM\Column(name="ServerName", type="string", length=500, nullable=true)
     */
    private $servername;

    /**
     * @var string
     *
     * @ORM\Column(name="DBversion", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $dbversion;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="DBGUID", type="uniqueidentifier", nullable=true)
     */
    private $dbguid;

    /**
     * @var string
     *
     * @ORM\Column(name="CommVersion", type="string", length=20, nullable=true)
     */
    private $commversion;

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

