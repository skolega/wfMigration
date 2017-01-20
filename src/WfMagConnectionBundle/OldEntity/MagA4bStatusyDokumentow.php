<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bStatusyDokumentow
 *
 * @ORM\Table(name="MAG_A4B_STATUSY_DOKUMENTOW", uniqueConstraints={@ORM\UniqueConstraint(name="UIDX_STATUS_DOKUMENTU_RODZAJ_DOK_A4B", columns={"Status", "RodzajDok"})})
 * @ORM\Entity
 */
class MagA4bStatusyDokumentow
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Statusu", type="bigint", nullable=false)
     */
    private $idStatusu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="RodzajDok", type="string", length=3, nullable=false)
     */
    private $rodzajdok;

    /**
     * @var string
     *
     * @ORM\Column(name="OpisStatusu", type="string", length=255, nullable=false)
     */
    private $opisstatusu;


}

