<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Watchtable
 *
 * @ORM\Table(name="WATCHTABLE")
 * @ORM\Entity
 */
class Watchtable
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA", type="datetime", nullable=false)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="PROCEDURA", type="string", length=50, nullable=true)
     */
    private $procedura;

    /**
     * @var string
     *
     * @ORM\Column(name="SQL", type="string", length=1000, nullable=true)
     */
    private $sql;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="integer", nullable=true)
     */
    private $idUzytkownika;


}

