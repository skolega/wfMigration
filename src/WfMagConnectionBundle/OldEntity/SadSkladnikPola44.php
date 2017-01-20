<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SadSkladnikPola44
 *
 * @ORM\Table(name="SAD_SKLADNIK_POLA44")
 * @ORM\Entity
 */
class SadSkladnikPola44
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SKLADNIKA", type="string", length=9, nullable=false)
     */
    private $idSkladnika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SADU", type="string", length=9, nullable=false)
     */
    private $idSadu;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_POZYCJI", type="integer", nullable=false)
     */
    private $nrPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=20, nullable=true)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA", type="string", length=9, nullable=true)
     */
    private $kwota;

    /**
     * @var string
     *
     * @ORM\Column(name="WPLYW_NA_CENE", type="string", length=1, nullable=true)
     */
    private $wplywNaCene = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="WPLYW_NA_PODSTAWE_VAT", type="string", length=1, nullable=true)
     */
    private $wplywNaPodstaweVat = '1';


}

