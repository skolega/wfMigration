<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AkcyzaSlWydanie
 *
 * @ORM\Table(name="AKCYZA_SL_WYDANIE")
 * @ORM\Entity
 */
class AkcyzaSlWydanie
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_WYDANIA", type="string", length=9, nullable=false)
     */
    private $idWydania;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES", type="string", length=100, nullable=true)
     */
    private $adres;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=true)
     */
    private $idMagazynu;


}

