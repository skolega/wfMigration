<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lokalizacja
 *
 * @ORM\Table(name="LOKALIZACJA", indexes={@ORM\Index(name="PO_NAZWIE", columns={"LOKALIZACJA"})})
 * @ORM\Entity
 */
class Lokalizacja
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_LOKALIZACJA", type="string", length=9, nullable=false)
     */
    private $idLokalizacja;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=false)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="LOKALIZACJA", type="string", length=30, nullable=true)
     */
    private $lokalizacja;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=200, nullable=true)
     */
    private $opis;


}

