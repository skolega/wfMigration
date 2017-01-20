<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WyroznikKontrahenta
 *
 * @ORM\Table(name="WYROZNIK_KONTRAHENTA")
 * @ORM\Entity
 */
class WyroznikKontrahenta
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_WYROZNIK_KONTRAHENTA", type="string", length=9, nullable=false)
     */
    private $idWyroznikKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY", type="string", length=1, nullable=true)
     */
    private $domyslny = '0';


}

