<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SadRozrachunekT
 *
 * @ORM\Table(name="SAD_ROZRACHUNEK_T")
 * @ORM\Entity
 */
class SadRozrachunekT
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SAD_ROZRACHUNEK", type="string", length=9, nullable=false)
     */
    private $idSadRozrachunek;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SADU", type="string", length=9, nullable=true)
     */
    private $idSadu;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOK", type="string", length=30, nullable=true)
     */
    private $nrDok;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_PLATNIKA", type="string", length=1, nullable=true)
     */
    private $typPlatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PLATNIKA", type="string", length=9, nullable=false)
     */
    private $idPlatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA", type="string", length=9, nullable=true)
     */
    private $kwota;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_PLAT", type="string", length=20, nullable=true)
     */
    private $formaPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="TERMIN_PLAT", type="string", length=4, nullable=true)
     */
    private $terminPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=500, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="string", length=9, nullable=true)
     */
    private $idRozrachunku;


}

