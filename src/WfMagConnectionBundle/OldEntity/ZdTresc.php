<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdTresc
 *
 * @ORM\Table(name="ZD_TRESC", indexes={@ORM\Index(name="ZD_TRESC_ID_EMAIL", columns={"ID_EMAIL"})})
 * @ORM\Entity
 */
class ZdTresc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EMAIL", type="integer", nullable=false)
     */
    private $idEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="TRESC", type="text", length=-1, nullable=true)
     */
    private $tresc;


}

