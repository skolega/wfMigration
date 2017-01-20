<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DostawaSkladnika
 *
 * @ORM\Table(name="DOSTAWA_SKLADNIKA")
 * @ORM\Entity
 */
class DostawaSkladnika
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="string", length=9, nullable=false)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SKLADNIKA", type="string", length=9, nullable=false)
     */
    private $idSkladnika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOSTAWY", type="string", length=9, nullable=false)
     */
    private $idPozDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc;

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA", type="string", length=10, nullable=true)
     */
    private $jednostka;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=true)
     */
    private $przelicznik = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO", type="string", length=9, nullable=true)
     */
    private $cenaNetto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO", type="string", length=9, nullable=true)
     */
    private $cenaBrutto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ZREALIZOWANA", type="smallint", nullable=true)
     */
    private $zrealizowana = '0';


}

