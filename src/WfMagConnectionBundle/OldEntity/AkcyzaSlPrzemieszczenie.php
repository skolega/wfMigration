<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AkcyzaSlPrzemieszczenie
 *
 * @ORM\Table(name="AKCYZA_SL_PRZEMIESZCZENIE")
 * @ORM\Entity
 */
class AkcyzaSlPrzemieszczenie
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRZEMIESZCZENIA", type="string", length=9, nullable=false)
     */
    private $idPrzemieszczenia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

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

