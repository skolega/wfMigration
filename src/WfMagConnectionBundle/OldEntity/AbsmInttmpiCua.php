<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsmInttmpiCua
 *
 * @ORM\Table(name="ABSM_IntTmpI_CuA")
 * @ORM\Entity
 */
class AbsmInttmpiCua
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
     * @ORM\Column(name="IdAccount", type="string", length=50, nullable=true)
     */
    private $idaccount;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdAccount_ABSM", type="integer", nullable=true)
     */
    private $idaccountAbsm;

    /**
     * @var string
     *
     * @ORM\Column(name="BankName", type="string", length=100, nullable=true)
     */
    private $bankname;

    /**
     * @var string
     *
     * @ORM\Column(name="BankNumber", type="string", length=10, nullable=true)
     */
    private $banknumber;

    /**
     * @var string
     *
     * @ORM\Column(name="AccountNumber", type="string", length=100, nullable=true)
     */
    private $accountnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=50, nullable=true)
     */
    private $description;

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
     * @ORM\Column(name="IdCustomer_ABSM", type="integer", nullable=true)
     */
    private $idcustomerAbsm;


}

