<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IntraKTransportu
 *
 * @ORM\Table(name="INTRA_K_TRANSPORTU")
 * @ORM\Entity
 */
class IntraKTransportu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSPORTU", type="string", length=9, nullable=false)
     */
    private $idTransportu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_TRANSPORTU", type="string", length=10, nullable=false)
     */
    private $kodTransportu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=200, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY", type="string", length=1, nullable=false)
     */
    private $domyslny = '0';


}

