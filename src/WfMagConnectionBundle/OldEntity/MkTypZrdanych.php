<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MkTypZrdanych
 *
 * @ORM\Table(name="MK_TYP_ZRDANYCH")
 * @ORM\Entity
 */
class MkTypZrdanych
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TYPU_MK_ZRDANYCH", type="integer", nullable=false)
     */
    private $idTypuMkZrdanych;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=30, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="SKROT", type="string", length=10, nullable=true)
     */
    private $skrot;


}

