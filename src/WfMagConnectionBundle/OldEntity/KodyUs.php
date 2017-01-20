<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KodyUs
 *
 * @ORM\Table(name="KODY_US", indexes={@ORM\Index(name="idx_Miasto", columns={"Miasto"})})
 * @ORM\Entity
 */
class KodyUs
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=4, nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NazwaUS", type="string", length=150, nullable=true)
     */
    private $nazwaus;

    /**
     * @var string
     *
     * @ORM\Column(name="Miasto", type="string", length=50, nullable=true)
     */
    private $miasto;

    /**
     * @var string
     *
     * @ORM\Column(name="Naczelnik", type="string", length=200, nullable=true)
     */
    private $naczelnik;


}

