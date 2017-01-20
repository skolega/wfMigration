<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SerwisGrupa
 *
 * @ORM\Table(name="SERWIS_GRUPA")
 * @ORM\Entity
 */
class SerwisGrupa
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY_SERWISOWEJ", type="string", length=9, nullable=false)
     */
    private $idGrupySerwisowej;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNA", type="string", length=1, nullable=true)
     */
    private $domyslna = '0';


}

