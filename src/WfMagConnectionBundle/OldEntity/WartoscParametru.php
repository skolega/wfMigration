<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WartoscParametru
 *
 * @ORM\Table(name="WARTOSC_PARAMETRU")
 * @ORM\Entity
 */
class WartoscParametru
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_WARIANTU", type="string", length=9, nullable=false)
     */
    private $idWariantu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PARAMETRU", type="string", length=9, nullable=false)
     */
    private $idParametru;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="string", length=200, nullable=true)
     */
    private $wartosc;


}

