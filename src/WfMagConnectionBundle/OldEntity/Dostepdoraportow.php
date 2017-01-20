<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dostepdoraportow
 *
 * @ORM\Table(name="DOSTEPDORAPORTOW")
 * @ORM\Entity
 */
class Dostepdoraportow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAPORTU", type="string", length=9, nullable=false)
     */
    private $idRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=9, nullable=false)
     */
    private $idGrupy;

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAJ_DOSTEPU", type="smallint", nullable=false)
     */
    private $rodzajDostepu;


}

