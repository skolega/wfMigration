<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterDmDrs
 *
 * @ORM\Table(name="INTER_DM_DRS", indexes={@ORM\Index(name="INTERDMDRS_ILOSC", columns={"ILOSC", "ID_POZ_DOK_MAG", "ID_POZYCJI"})})
 * @ORM\Entity
 */
class InterDmDrs
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_MAG", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozDokMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=false)
     */
    private $ilosc;


}

