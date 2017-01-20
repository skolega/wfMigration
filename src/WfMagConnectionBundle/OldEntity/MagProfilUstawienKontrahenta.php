<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagProfilUstawienKontrahenta
 *
 * @ORM\Table(name="MAG_PROFIL_USTAWIEN_KONTRAHENTA")
 * @ORM\Entity
 */
class MagProfilUstawienKontrahenta
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_PROFILU", type="string", length=9, nullable=false)
     */
    private $idProfilu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=false)
     */
    private $idKontrahenta;


}

