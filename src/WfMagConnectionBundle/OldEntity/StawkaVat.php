<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StawkaVat
 *
 * @ORM\Table(name="STAWKA_VAT")
 * @ORM\Entity
 */
class StawkaVat
{
    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=false)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=20, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="STAWKA", type="string", length=5, nullable=true)
     */
    private $stawka;

    /**
     * @var string
     *
     * @ORM\Column(name="AKTYWNY", type="string", length=1, nullable=true)
     */
    private $aktywny;


}

