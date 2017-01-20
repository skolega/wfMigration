<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagKartonParametry
 *
 * @ORM\Table(name="MAG_KARTON_PARAMETRY")
 * @ORM\Entity
 */
class MagKartonParametry
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNA_SCIEZKA", type="string", length=300, nullable=true)
     */
    private $domyslnaSciezka;


}

