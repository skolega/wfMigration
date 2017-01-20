<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SerwisSlownikOpisow
 *
 * @ORM\Table(name="SERWIS_SLOWNIK_OPISOW")
 * @ORM\Entity
 */
class SerwisSlownikOpisow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SERWIS_SLOWNIK_OPISOW", type="string", length=9, nullable=false)
     */
    private $idSerwisSlownikOpisow;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=1, nullable=false)
     */
    private $rodzaj = 'O';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY", type="string", length=1, nullable=false)
     */
    private $domyslny = '0';


}

