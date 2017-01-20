<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Przecena
 *
 * @ORM\Table(name="PRZECENA")
 * @ORM\Entity
 */
class Przecena
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=false)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRZECENY", type="string", length=9, nullable=false)
     */
    private $idPrzeceny;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=false)
     */
    private $numer;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=false)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="GODZINA", type="integer", nullable=false)
     */
    private $godzina;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="string", length=9, nullable=true)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=1, nullable=true)
     */
    private $flagaStanu;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=true)
     */
    private $semafor;


}

