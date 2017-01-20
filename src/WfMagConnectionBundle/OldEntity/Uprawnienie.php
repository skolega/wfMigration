<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uprawnienie
 *
 * @ORM\Table(name="UPRAWNIENIE", uniqueConstraints={@ORM\UniqueConstraint(name="AK_UPRAWNIENIE_UPRAWNIE", columns={"KODTREE"})})
 * @ORM\Entity
 */
class Uprawnienie
{
    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=20, nullable=false)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=100, nullable=false)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=10, nullable=false)
     */
    private $rodzaj;

    /**
     * @var string
     *
     * @ORM\Column(name="KODTREE", type="string", length=30, nullable=false)
     */
    private $kodtree;

    /**
     * @var integer
     *
     * @ORM\Column(name="POZIOMTREE", type="integer", nullable=false)
     */
    private $poziomtree;


}

