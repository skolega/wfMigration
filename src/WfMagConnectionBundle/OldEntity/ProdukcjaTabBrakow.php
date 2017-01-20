<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProdukcjaTabBrakow
 *
 * @ORM\Table(name="PRODUKCJA_TAB_BRAKOW")
 * @ORM\Entity
 */
class ProdukcjaTabBrakow
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_uzytkownika", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="id_zlecenia", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idZlecenia;

    /**
     * @var string
     *
     * @ORM\Column(name="id_pozycji", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ilosc_prod", type="decimal", precision=16, scale=4, nullable=true)
     */
    private $iloscProd;

    /**
     * @var string
     *
     * @ORM\Column(name="id_skladnika", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idSkladnika;

    /**
     * @var string
     *
     * @ORM\Column(name="ilosc_sklad", type="decimal", precision=16, scale=4, nullable=true)
     */
    private $iloscSklad;

    /**
     * @var string
     *
     * @ORM\Column(name="linia", type="string", length=500, nullable=true)
     */
    private $linia;


}

