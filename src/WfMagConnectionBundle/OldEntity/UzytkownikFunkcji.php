<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UzytkownikFunkcji
 *
 * @ORM\Table(name="UZYTKOWNIK_FUNKCJI")
 * @ORM\Entity
 */
class UzytkownikFunkcji
{
    /**
     * @var string
     *
     * @ORM\Column(name="KOD_FUNKCJI", type="string", length=20, nullable=false)
     */
    private $kodFunkcji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;


}

