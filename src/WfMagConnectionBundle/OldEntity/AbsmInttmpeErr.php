<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsmInttmpeErr
 *
 * @ORM\Table(name="ABSM_IntTmpE_Err")
 * @ORM\Entity
 */
class AbsmInttmpeErr
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
     * @var \DateTime
     *
     * @ORM\Column(name="ErrorDate", type="datetime", nullable=false)
     */
    private $errordate;

    /**
     * @var string
     *
     * @ORM\Column(name="ErrorDescription", type="string", length=3000, nullable=false)
     */
    private $errordescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="ErrorType", type="integer", nullable=true)
     */
    private $errortype;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDocument_ABSM", type="bigint", nullable=true)
     */
    private $iddocumentAbsm;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdDocumentDetail_ABSM", type="bigint", nullable=true)
     */
    private $iddocumentdetailAbsm;


}

