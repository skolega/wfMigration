<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SadRozrachWyroznik
 *
 * @ORM\Table(name="SAD_ROZRACH_WYROZNIK")
 * @ORM\Entity
 */
class SadRozrachWyroznik
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SAD_ROZRACH_WYROZNIK", type="string", length=9, nullable=false)
     */
    private $idSadRozrachWyroznik;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SAD_ROZRACHUNEK", type="string", length=9, nullable=true)
     */
    private $idSadRozrachunek;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_POLA", type="string", length=1, nullable=true)
     */
    private $typPola;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="string", length=20, nullable=true)
     */
    private $wartosc;


}

