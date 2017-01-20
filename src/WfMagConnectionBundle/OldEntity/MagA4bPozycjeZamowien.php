<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bPozycjeZamowien
 *
 * @ORM\Table(name="MAG_A4B_POZYCJE_ZAMOWIEN")
 * @ORM\Entity
 */
class MagA4bPozycjeZamowien
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_pozzam_mag", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozzamMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_pozzam_a4b", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozzamA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_a4b", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idA4b;


}

