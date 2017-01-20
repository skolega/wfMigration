<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KodPocztowy
 *
 * @ORM\Table(name="KOD_POCZTOWY")
 * @ORM\Entity
 */
class KodPocztowy
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
     * @ORM\Column(name="WOJEWODZTWO", type="string", length=30, nullable=false)
     */
    private $wojewodztwo;

    /**
     * @var string
     *
     * @ORM\Column(name="MIASTO", type="string", length=50, nullable=false)
     */
    private $miasto;

    /**
     * @var string
     *
     * @ORM\Column(name="POWIAT", type="string", length=50, nullable=true)
     */
    private $powiat = '';


}

