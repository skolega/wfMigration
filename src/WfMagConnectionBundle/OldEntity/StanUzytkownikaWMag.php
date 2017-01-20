<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StanUzytkownikaWMag
 *
 * @ORM\Table(name="STAN_UZYTKOWNIKA_W_MAG", indexes={@ORM\Index(name="STAN_UZYT_IDM_IDUZ", columns={"ID_MAGAZYNU", "ID_UZYTKOWNIKA"})})
 * @ORM\Entity
 */
class StanUzytkownikaWMag
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_STANU", type="string", length=9, nullable=false)
     */
    private $idStanu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_PRACA", type="string", length=1, nullable=true)
     */
    private $czyPraca = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_REMBIL", type="string", length=1, nullable=true)
     */
    private $czyRembil = '0';


}

