<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Drukarka
 *
 * @ORM\Table(name="DRUKARKA")
 * @ORM\Entity
 */
class Drukarka
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DRUKARKI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDrukarki;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP", type="string", length=20, nullable=true)
     */
    private $typ = '';

    /**
     * @var string
     *
     * @ORM\Column(name="STANOWISKO", type="string", length=100, nullable=true)
     */
    private $stanowisko = '';


}

