<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paczka
 *
 * @ORM\Table(name="PACZKA")
 * @ORM\Entity
 */
class Paczka
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_PACZKA", type="string", length=9, nullable=false)
     */
    private $idPaczka;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_PACZKI", type="string", length=6, nullable=false)
     */
    private $kodPaczki;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_PACZKI", type="string", length=100, nullable=true)
     */
    private $opisPaczki;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYT", type="string", length=8, nullable=true)
     */
    private $idUzyt;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_LATA_OBROT", type="string", length=9, nullable=false)
     */
    private $idLataObrot;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA", type="integer", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_AKTYWNA", type="smallint", nullable=false)
     */
    private $czyAktywna;


}

