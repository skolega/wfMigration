<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdMetodaPrzechowaniaDanychBinarnych
 *
 * @ORM\Table(name="ZD_METODA_PRZECHOWANIA_DANYCH_BINARNYCH", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_ZD_METODA_PRZECHOWANIA_DANYCH_BINARNYCH", columns={"KOD"})})
 * @ORM\Entity
 */
class ZdMetodaPrzechowaniaDanychBinarnych
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_METODY_PRZECHOWANIA_DANYCH_BINARNYCH", type="integer", nullable=false)
     */
    private $idMetodyPrzechowaniaDanychBinarnych;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=64, nullable=false)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=256, nullable=false)
     */
    private $nazwa;


}

