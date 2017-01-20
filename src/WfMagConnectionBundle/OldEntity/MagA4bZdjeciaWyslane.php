<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bZdjeciaWyslane
 *
 * @ORM\Table(name="MAG_A4B_ZDJECIA_WYSLANE", uniqueConstraints={@ORM\UniqueConstraint(name="UIDX_MAG_A4B_ZDJECIA_WYSLANE", columns={"ID_A4B", "Id_Bloba", "ID_ARTYKULU"})})
 * @ORM\Entity
 */
class MagA4bZdjeciaWyslane
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Zdjecia", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZdjecia;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Bloba", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idBloba;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_A4B", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=true)
     */
    private $nazwa;


}

