<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A4bIntcheckBio
 *
 * @ORM\Table(name="A4B_IntCheck_BiO", indexes={@ORM\Index(name="IDX_A4B_IntCheck_BiO_IdRecordCheckState", columns={"IdRecord", "CheckState"})})
 * @ORM\Entity
 */
class A4bIntcheckBio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Checksum", type="bigint", nullable=false)
     */
    private $idChecksum;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="TransmissionGUID", type="uniqueidentifier", nullable=false)
     */
    private $transmissionguid;

    /**
     * @var string
     *
     * @ORM\Column(name="CheckIDExt", type="string", length=50, nullable=false)
     */
    private $checkidext = '000';

    /**
     * @var integer
     *
     * @ORM\Column(name="CheckValue", type="bigint", nullable=false)
     */
    private $checkvalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdRecord", type="bigint", nullable=false)
     */
    private $idrecord;

    /**
     * @var integer
     *
     * @ORM\Column(name="CheckState", type="smallint", nullable=false)
     */
    private $checkstate = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CheckDate", type="datetime", nullable=false)
     */
    private $checkdate = 'CURRENT_TIMESTAMP';


}

