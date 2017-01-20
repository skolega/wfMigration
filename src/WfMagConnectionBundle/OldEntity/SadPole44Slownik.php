<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SadPole44Slownik
 *
 * @ORM\Table(name="SAD_POLE44_SLOWNIK")
 * @ORM\Entity
 */
class SadPole44Slownik
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
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;


}

