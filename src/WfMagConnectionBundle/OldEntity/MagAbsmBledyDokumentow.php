<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagAbsmBledyDokumentow
 *
 * @ORM\Table(name="MAG_ABSM_BLEDY_DOKUMENTOW")
 * @ORM\Entity
 */
class MagAbsmBledyDokumentow
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Bledu", type="integer", nullable=false)
     */
    private $idBledu;

    /**
     * @var string
     *
     * @ORM\Column(name="RodzajDok", type="string", length=3, nullable=false)
     */
    private $rodzajdok;

    /**
     * @var string
     *
     * @ORM\Column(name="TrescBledu", type="string", length=500, nullable=false)
     */
    private $trescbledu;


}

