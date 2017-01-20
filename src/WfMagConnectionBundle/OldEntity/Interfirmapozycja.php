<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interfirmapozycja
 *
 * @ORM\Table(name="INTERFIRMAPOZYCJA", indexes={@ORM\Index(name="FK_FIRMA", columns={"ID_FIRMY"}), @ORM\Index(name="FK_POZYCJAKONFIG", columns={"ID_POZYCJI"})})
 * @ORM\Entity
 */
class Interfirmapozycja
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=9, nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="string", length=9, nullable=false)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="string", length=200, nullable=false)
     */
    private $wartosc;


}

