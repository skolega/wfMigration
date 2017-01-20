<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdImportMagik
 *
 * @ORM\Table(name="ZD_IMPORT_MAGIK", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_ZD_IMPORT_MAGIK", columns={"ID_MK_ZRDANYCH", "ID_TRANSAKCJI", "PRGKOD"})})
 * @ORM\Entity
 */
class ZdImportMagik
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_IMPORTU_MAGIK", type="integer", nullable=false)
     */
    private $idImportuMagik;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_MK_ZRDANYCH", type="integer", nullable=false)
     */
    private $idMkZrdanych;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSAKCJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idTransakcji;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="smallint", nullable=false)
     */
    private $prgkod;


}

